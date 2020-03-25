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

$catagoryall = Tool::findAll();
//$r=count($catagoryall);
$data = array();
foreach ($catagoryall as $key => $value)
{
    $data[$i] = array($value->getOname(),Catagory::findByID($value->getObjType())->getOTName(),$value->getSerial(),$value->getStatus(),"<label class='w3-button w3-block w3-indigo w3-round' onclick='document.getElementById(\"download\").style.display=\"block\"'>รายละเอียด</label>");
    $i = $i+1;
}
print_r($data);
//print_r(ToolStatus::findByID(Tool::findByID("O0001")->getStatus())->getOSStatus());

/*$list = Product::findAll();
print_r($list);
echo "<br/>";


$product = new Product();
//$product->setProductId(5);
$product->setProductName("แปรง");
$product->setPrice(30);
$product->insert();
$product->setPrice(40);
$product->update();

$p = Product::findById(2);
print_r($p);

var_dump(Product::findById(30));