<?php
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

    private function login(string $username, string $password) {
        $member = Member::findByAccount($username,$password) ;
        if ($member !== null){
            session_start();
            $_SESSION['member'] = $member;
            $_SESSION['productList'] = Product::findAll();
            include Router::getSourcePath()."views/cart.inc.php";
        }
        else {
            header("Location: ".Router::getSourcePath()."index.php?msg=invalid user");
        }
    }

    // ควรมีสำหรับ controller ทุกตัว
    private function index() {

    }

}
?>