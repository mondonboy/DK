<?php
class EditTypeController{
    public function handleRequest(string $action="editType", array $params) {
        switch ($action) {
            case "editType":
                $this->editType();
                break;
            default:
                break;
        }

    }
    private function editType(){
        session_start();



        if($_SESSION['member']->getUSERROLES()=="ADMIN"){
            include Router::getSourcePath() . "views/EditTypeAdmin.php";
        }
        if($_SESSION['member']->getUSERROLES()=="MANAGER"){
            include Router::getSourcePath() . "views/Manager/EditTypeManager.php";
        }
        if($_SESSION['member']->getUSERROLES()=="USER"){
            include Router::getSourcePath() . "views/User/EditTypeUser.php";
        }
    }
}

?>