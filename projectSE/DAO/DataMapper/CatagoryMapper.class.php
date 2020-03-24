<?php


class CatagoryMapper
{
    private $catList;
    private const TABLE="catagory";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Catagory");
        $this->catList  = array();
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            $cat = new Catagory();
            $cat->setOTID($row['OT_ID']);
            $cat->setOTName($row['OT_Name']);
            $this->catList[$cat->getOTID()] = $cat;
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
            $query .= " WHERE OT_ID = ".$prod->getOTID();
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