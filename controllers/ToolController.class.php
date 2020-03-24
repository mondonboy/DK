<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 24/1/2562
 * Time: 14:51
 */

class ToolController
{
    public function handleRequest(string $action="cart", array $params=null) {
        switch ($action)
        {
            case "index":
                session_start();
                $products = $_SESSION['productList'];
                $this->$action();
                break;
            case "index":
                $this->index();
                break;
            default:
                break;
        }

    }
    private function cart()
    {
        include Router::getSourcePath()."views/checkout.inc.php";
    }
}