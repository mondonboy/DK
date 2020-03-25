<?php


class ToolStatus
{
    private $OS_ID;
    private $OSStatus;
    private const TABLE = "tools_status";

    /**
     * ToolStatus constructor.
     * @param $OS_ID
     * @param $OSStatus
     */
    public function __construct($OS_ID, $OSStatus)
    {
        $this->OS_ID = $OS_ID;
        $this->OSStatus = $OSStatus;
    }

    /**
     * @return mixed
     */
    public function getOSID()
    {
        return $this->OS_ID;
    }

    /**
     * @param mixed $OS_ID
     */
    public function setOSID($OS_ID): void
    {
        $this->OS_ID = $OS_ID;
    }

    /**
     * @return mixed
     */
    public function getOSStatus()
    {
        return $this->OSStatus;
    }

    /**
     * @param mixed $OSStatus
     */
    public function setOSStatus($OSStatus): void
    {
        $this->OSStatus = $OSStatus;
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
            $catList[$row["OS_ID"]] = new ToolStatus($row["OS_ID"],$row["OSStatus"]);
        }
        return $catList;
    }

    public static function findByID(string $username): ?ToolStatus {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where OS_ID = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($cat = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $cata = self::findAll();
            return $cata[$cat['OS_ID']];
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
        $query .= " WHERE OS_ID = ".$this->getOSID();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }
}