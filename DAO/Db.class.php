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
        if (!isset(self::$instance)) {
            self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
            self::$instance->query("SET NAMES UTF8");
        }
        return self::$instance;
    }
}
