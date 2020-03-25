<?php
class PromiseController{
    public function handleRequest(string $action="Promise", array $params) {
        switch ($action) {
            case "Promise":
                $this->promise();
                break;
            default:
                break;
        }

    }
    private function promise(){
        session_start();


        if($_SESSION['member']->getUSERROLES()=="ADMIN"){
            include Router::getSourcePath() . "views/PromiseAdmin.php";
        }
        if($_SESSION['member']->getUSERROLES()=="MANAGER"){
            include Router::getSourcePath() . "views/Manager/PromiseManager.php";
        }
        if($_SESSION['member']->getUSERROLES()=="USER"){
            include Router::getSourcePath() . "views/User/PromiseUser.php";
        }
    }
}

?>