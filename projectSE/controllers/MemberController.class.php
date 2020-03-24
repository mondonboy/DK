<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 24/1/2562
 * Time: 15:07
 */
require ("./DAO/Db.class.php");
class MemberController {

    /**
     * handleRequest จะทำการตรวจสอบ action และพารามิเตอร์ที่ส่งเข้ามาจาก Router
     * แล้วทำการเรียกใช้เมธอดที่เหมาะสมเพื่อประมวลผลแล้วส่งผลลัพธ์กลับ
     *
     * @param string $action ชื่อ action ที่ผู้ใช้ต้องการทำ
     * @param array $params พารามิเตอร์ที่ใช้เพื่อในการทำ action หนึ่งๆ
     */
    public function handleRequest(string $action="index", array $params) {
        switch ($action) {
            case "login":
                $username = $params["POST"]["username"]??"";
                $pass = $params["POST"]["password"]??"";
                if ($username !== "" && $pass !== "") {
                    $this->$action($username, $pass);
                }else{
                    header("Location");
                }
                break;
            case "index":
                $this->index();
                break;
            default:
                break;
        }

    }

    private function login(string $username,string $password)
    {

        $info = KULDAP::user_authen($username, $password, $username);
        /*print_r($info[0]['uid'][0]);
        try {
            $mem = Member::findByAccount("b6020500390");
            print_r($mem);
        }catch (Throwable $e){
            echo $e;
    }*/
        if($info == null) {
            header("Location: ".Router::getSourcePath()."index.php?msg=invalid user");
        }else{
            $member = Member::findByAccount($info[0]["uid"][0]);
            if($member == null){
                $mb = new Member($info[0]["uid"][0],$info[0]["idcode"][0],$info[0]["thaiprename"][0],$info[0]["first-name"][0],$info[0]["last-name"][0],$info[0]["type-person"][0],$info[0]["google-mail"][0],"CLIENT");
                $mb->insert();
                $member = $mb;
            }
            session_start();
            $_SESSION['member'] = $member;
            include Router::getSourcePath() . "views/cart.php";
        }
        //include Router::getSourcePath()."views/cart.php";
        //}
        /*if ($username == "" || $password == "") {
            header("Location: index.php?error=กรอกข้อมูลไม่ครบ!");
        } else {
            $info = MemberMapper::Auth($username,$password,$username);
            if ($info[0]["uid"][0] == "") {
                header("Location: index.php?error=รหัสผู้ใช้หรือรหัสผิด!");
            } else {
                $member = MemberMapper::findByUid($info[0]["uid"][0]);
                if ($member !== null) {
                    session_start();
                    $_SESSION['member'] = $member;
                    //$_SESSION['productList'] = Product::findAll();
                    include Router::getSourcePath() . "views/cart.php";
                } else {
                   $check =  MemberMapper::insert($member);
                   print_r($check);
                }
            }
        }*/
    }

    // ควรมีสำหรับ controller ทุกตัว
    private function index() {

    }


}