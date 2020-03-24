<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 24/1/2562
 * Time: 15:07
 */

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
                }
                break;
            case "index":
                $this->index();
                break;
            default:
                break;
        }

    }

    private function login()
    {
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";
        include Router::getSourcePath() . "views/ldap.php";
        if ($username == "" || $password == "") {
            header("Location: loginIndex.php?error=กรอกข้อมูลไม่ครบ!");
        } else {
            $info = (user_authen($username2, $password, $username));
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
        }
    }

    // ควรมีสำหรับ controller ทุกตัว
    private function index() {

    }


}