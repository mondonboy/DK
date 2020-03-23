<?php


class ToolStatusMapper
{
    private $tsList;
    private const TABLE="tools_status";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "ToolsStatus");
        $stmt->execute();
        $this->tsList  = array();
        while ($prod = $stmt->fetch())
        {
            $this->tsList[$prod->getOSID()] = $prod;
        }
    }

    public function getAll(): array {
        return $this->tsList;
    }
    public function get(int $id): ?ToolsStatus {
        return $this->tsList[$id]??null;
    }
    public function update(ToolsStatus $prod) {

        if (isset($this->tsList[$prod->getOSID()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $prodIt = $prod->getIterator();
            foreach ($prodIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE OID = ".$prod->getOSID();
            //echo $query;
            $con = Db::getInstance();
            if ($con->exec($query) === true) {
                $this->tsList[$prod->getOSID()] = $prod;
                return true;
            }
            return false;
        }
        else {
            throw new Exception("Product doesn't exist");
        }



    }
}