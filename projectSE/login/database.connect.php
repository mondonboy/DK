<?php
$hostname = "localhost";
$user = "se62_06";
$passwd = "se62_06";
$dbName = "se62_06";

$conn = new mysqli($hostname,$user,$passwd);

if($conn->connect_error)
{
    die("AConnection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbName))
{
    die("FConnection failed: ".$conn->connect_error);
}
$conn->query("SET NAMES UTF8")
?>