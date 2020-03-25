<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 23/1/2562
 * Time: 11:52
 */
spl_autoload_register(function ($class) {
    $path = '../DAO/ActiveRecord/' . $class . '.class.php';
    if (file_exists($path))
        require_once $path;
});
spl_autoload_register(function ($class) {
    $path = '../DAO/' . $class . '.class.php';
    if (file_exists($path))
        require_once $path;
});

print_r(Member::findAll());
/*$s = Rent::findByID("R001");
print_r($s->update());

//$memb = new Member();
//print_r(Db::getInstance());
/*$list = new Member("b6020503844","dw","wdw","cggcuuv","npnpnpnpnp","b","bibipibp","CLIENT");
$u = "b6020503844";
$p = "Darkdevil2306!";
$info = KULDAP::user_authen($u, $p, $u);
print_r($info[0]['idcode'][0]);
print_r(Member::findByAccount($info[0]['uid'][0]));
//print_r($list);
echo "<br/><br/><br/>";
/*$con = Db::getInstance();
$query = "SELECT * FROM member WHERE uid = 'b6020500390'";
$stmt = $con->query($query);
//$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
//$stmt->execute();
//print_r($stmt->fetchAll(PDO::FETCH_OBJ));
foreach ( $stmt->fetchAll(PDO::FETCH_OBJ) as $row) {
    echo $row->uid." ".$row->kuID." ".$row->prename." ".$row->firstname." ".$row->lastname." ".$row->types." ".$row->email." ".$row->USERROLES."<br>";
}
/*if ($memb = $stmt->fetch())
{
    print_r($memb);
}*/


/*$member = new Member();

$member->setUsername("AA");
$member->setPasswd("BB");
$member->setName("eiei");
$member->setSurname("naja");
$member->insert();
$member->setSurname("huhi");
$member->update();*/


$m = Member::findByAccount("admin", "admin");
//print_r($m);
echo "<br/><br/><br/>";
session_start();
var_dump(Member::findByAccount("admin", "admin"));

$mem = $_SESSION['member'];
if($mem->getUSERROLES()=="MANAGER"){
    echo "เมเนเจอร์";
    echo $mem->getUSERROLES();
}
else
    echo "ไม่รุ้จัก";

