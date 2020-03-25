<?php
class HistoryController{
    public function handleRequest(string $action="History", array $params) {
        switch ($action) {
            case "History":
                $this->history();
                break;
            default:
                break;
        }

    }
    private function history(){
        session_start();


        if($_SESSION['member']->getUSERROLES()=="ADMIN"){
            include Router::getSourcePath() . "views/HistoryAdmin.php";
        }
        if($_SESSION['member']->getUSERROLES()=="MANAGER"){
            include Router::getSourcePath() . "views/Manager/HistoryManager.php";
        }
        if($_SESSION['member']->getUSERROLES()=="USER"){
            include Router::getSourcePath() . "views/User/HistoryUser.php";
        }
    }
}

?>