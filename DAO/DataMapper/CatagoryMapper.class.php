<?php


class CatagoryMapper
{
    private $catList;
    private const TABLE="catagory";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Catagory");
        $stmt->execute();
        $this->catList  = array();
        while ($prod = $stmt->fetch())
        {
            $this->catList[$prod->getOTID()] = $prod;
        }
    }

    public function getAll(): array {
        return $this->catList;
    }
    public function get(int $id): ?Catagory {
        return $this->catList[$id]??null;
    }
    public function update(Catagory $prod) {

        if (isset($this->catList[$prod->getOTID()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $prodIt = $prod->getIterator();
            foreach ($prodIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE OID = ".$prod->getOTID();
            //echo $query;
            $con = Db::getInstance();
            if ($con->exec($query) === true) {
                $this->catList[$prod->getOTID()] = $prod;
                return true;
            }
            return false;
        }
        else {
            throw new Exception("Product doesn't exist");
        }

    }
}