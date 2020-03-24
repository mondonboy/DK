<?php


class ToolMapper
{
    private $toolList;
    private const TABLE="tools";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Tool");
        $stmt->execute();
        $this->toolList  = array();
        while ($prod = $stmt->fetch())
        {
            $this->toolList[$prod->getOID()] = $prod;
        }
    }

    public function getAll(): array {
        return $this->toolList;
    }
    public function get(int $id): ?Tool {
        return $this->toolList[$id]??null;
    }
    public function update(Tool $prod) {

        if (isset($this->toolList[$prod->getOID()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $prodIt = $prod->getIterator();
            foreach ($prodIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE OID = ".$prod->getOID();
            //echo $query;
            $con = Db::getInstance();
            if ($con->exec($query) === true) {
                $this->toolList[$prod->getOID()] = $prod;
                return true;
            }
            return false;
        }
        else {
            throw new Exception("Product doesn't exist");
        }



    }
}