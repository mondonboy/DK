<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 22/1/2562
 * Time: 16:27
 */

class Db {
    private static $instance = NULL;
    private static $dsn = "mysql:dbname=se62_06;host=158.108.207.4";
    private static $user = "se62_06";
    private static $pass = "se62_06";
    private function __construct() {}
    private function __clone() {}
    public static function getInstance() {
        try{
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:dbname=se62_06;host=localhost","se62_06","se62_06");
                self::$instance->query("SET NAMES UTF8");
                self::$instance->query("SET character_set_results=utf8");
                self::$instance->query("SET character_set_client=utf8");
                self::$instance->query("SET character_set_connection=utf8");
            }
        }catch (PDOException $e) {
            echo "Error : " . $e->getMessage() . "<br/>";
            die();
        }
        return self::$instance;
    }
}
