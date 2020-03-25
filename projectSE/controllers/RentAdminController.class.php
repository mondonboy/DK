<?php
class RentAdminController{
    public function handleRequest(string $action="rentAdmin", array $params) {
        switch ($action) {
            case "rentAdmin":
                $this->rentAdmin();
                break;
            default:
                break;
        }

    }
    private function rentAdmin(){
        session_start();

        
        if($_SESSION['member']->getUSERROLES()=="ADMIN"){
            include Router::getSourcePath() . "views/RentAdmin.php";
        }
        if($_SESSION['member']->getUSERROLES()=="MANAGER"){
            include Router::getSourcePath() . "views/Manager/RentManager.php";
        }
        if($_SESSION['member']->getUSERROLES()=="USER"){
            include Router::getSourcePath() . "views/User/RentUser.php";
        }
    }
}

?>