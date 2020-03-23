<?php
/**
 * Created by PhpStorm.
 * User: Diiar
 * Date: 8/1/2562
 * Time: 15:21
 */

class Product
{
    private $PID;
    private $Pname;
    private $price;

    public function getProductId():int {
        return $this->PID;
    }
    public function setProductId(int $id) {
        $this->PID = $id;
    }
    public function getProductName():string
    {
        return $this->Pname;
    }

    public function setProductName(string $name) {
        $this->Pname = $name;
    }
    public function getPrice(): float {
        return $this->price;
    }
    public function setPrice(float $price) {
        $this->price = $price;
    }

    /**
     * iterator สำหรับวนลูปเข้าถึง properties ทุกตัวของ Product ในลูป foreach ได้
     * @return ArrayIterator iterator ที่มี key เป็นชื่อ property และ value เป็นค่าของ property
     */
    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }
}