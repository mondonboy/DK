<?php


class LogoutController
{
    public function handleRequest(string $action="index", array $params=null) {
        $this->$action();
    }

    private function logout(){
        session_start();
        unset($_SESSION['member']);
        session_unset();
        session_destroy();
        if (ini_get("session.use_cookies")) {
            setcookie(session_name(), '', time() - 3600, "/");
        }
        header("Location: ".Router::getSourcePath()."index.php?");

    }
    
}