<?php
class RequestController{
    public function handleRequest(string $action="Request", array $params) {
        switch ($action) {
            case "Request":
                $this->request();
                break;
            default:
                break;
        }

    }
    private function request(){
        session_start();
        if($_SESSION['member']->getUSERROLES()=="ADMIN"){
            include Router::getSourcePath() . "views/ListRequestAdmin.php";
        }
        if($_SESSION['member']->getUSERROLES()=="MANAGER"){
            include Router::getSourcePath() . "views/Manager/ListRequestManager.php";
        }
        if($_SESSION['member']->getUSERROLES()=="USER"){
            include Router::getSourcePath() . "views/User/ListRequestUser.php";
        }
    }
}

?>