<?php

spl_autoload_register(function ($class) {
    $path = '../DAO/DataMapper/' . $class . '.class.php';
    if (file_exists($path))
        require_once $path;
});
spl_autoload_register(function ($class) {
    $path = '../DAO/' . $class . '.class.php';
    if (file_exists($path))
        require_once $path;
});



//$members = new MemberMapper();
/*$con = Db::getInstance();
$query = "SELECT * FROM member";
$stmt = $con->prepare($query);
$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
$stmt->execute();
print_r($stmt->fetchAll());*/
print_r(MemberMapper::getAll());
echo "<br/><br/><br/>";
/*
$m = $members->get(1);
print_r($m);
echo "<br/><br/><br/>";

$m->setName("DK");
$m->setSurname("DaRKNeST");
print_r($m);
echo "<br/><br/><br/>";

$members->update($m);
print_r($members->getAll());
echo "<br/><br/><br/>";

var_dump($members->get(1));
echo "<br/><br/><br/>";

$m = new Member();
$m->setId(24);
$members->update($m);

