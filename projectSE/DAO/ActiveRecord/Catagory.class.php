<?php


class Catagory
{
    private  $OT_ID;
    private $OT_Name;
    private const TABLE = "catagory";

    /**
     * Catagory constructor.
     * @param $OT_ID
     * @param $OT_Name
     */
    public function __construct($OT_ID, $OT_Name)
    {
        $this->OT_ID = $OT_ID;
        $this->OT_Name = $OT_Name;
    }


    /**
     * @return mixed
     */
    public function getOTID()
    {
        return $this->OT_ID;
    }

    /**
     * @param mixed $OT_ID
     */
    public function setOTID($OT_ID): void
    {
        $this->OT_ID = $OT_ID;
    }

    /**
     * @return mixed
     */
    public function getOTName()
    {
        return $this->OT_Name;
    }

    /**
     * @param mixed $OT_Name
     */
    public function setOTName($OT_Name): void
    {
        $this->OT_Name = $OT_Name;
    }


    public static function findAll(): array {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        $catList  = array();
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            $catList[$row["OT_Name"]] = new Catagory($row["OT_ID"],$row["OT_Name"]);
        }
        return $catList;
    }

    public static function findByID(string $username): ?Catagory {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where OT_Name = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($cat = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $cata = self::findAll();
            return $cata[$cat['OT_Name']];
        }
        return null;
    }

    public function insert() {
        $con = Db::getInstance();
        $values = "";
        foreach ($this as $prop => $val) {
            $values .= "'$val',";
        }
        $values = substr($values,0,-1);
        $query = "INSERT INTO ".self::TABLE." VALUES ($values)";
        //echo $query;
        $res = $con->exec($query);
        //$this->uid = $con->lastInsertId();
        return $res;
    }

    public function update() {
        $query = "UPDATE ".self::TABLE." SET ";
        foreach ($this as $prop => $val) {
            $query .= " $prop='$val',";
        }
        $query = substr($query, 0, -1);
        $query .= " WHERE OT_ID = ".$this->getOTID();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }
}