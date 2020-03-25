<?php


class Permit
{
    private $OP_ID;
    private $position;
    private const TABLE = "tools_status";

    /**
     * Permit constructor.
     * @param $OP_ID
     * @param $position
     */
    public function __construct($OP_ID, $position)
    {
        $this->OP_ID = $OP_ID;
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getOPID()
    {
        return $this->OP_ID;
    }

    /**
     * @param mixed $OP_ID
     */
    public function setOPID($OP_ID): void
    {
        $this->OP_ID = $OP_ID;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
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
            $catList[$row["OP_ID"]] = new Permit($row["OP_ID"],$row["position"]);
        }
        return $catList;
    }

    public static function findByID(string $username): ?Permit {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where OP_ID = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($cat = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $cata = self::findAll();
            return $cata[$cat['OP_ID']];
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
        $query .= " WHERE OP_ID = ".$this->getOPID();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }
}