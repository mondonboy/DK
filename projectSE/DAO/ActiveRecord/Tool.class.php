<?php


class Tool
{
    private $OID;
    private $Oname;
    private $detail;
    private $serial;
    private $objType;
    private $status;
    private $Permited;
    private const TABLE = "tools";

    /**
     * Tool constructor.
     * @param $OID
     * @param $Oname
     * @param $detail
     * @param $serial
     * @param $objType
     * @param $status
     * @param $Permited
     */
    public function __construct($OID, $Oname, $detail, $serial, $objType, $status, $Permited)
    {
        $this->OID = $OID;
        $this->Oname = $Oname;
        $this->detail = $detail;
        $this->serial = $serial;
        $this->objType = $objType;
        $this->status = $status;
        $this->Permited = $Permited;
    }

    /**
     * @return mixed
     */
    public function getOID()
    {
        return $this->OID;
    }

    /**
     * @param mixed $OID
     */
    public function setOID($OID): void
    {
        $this->OID = $OID;
    }

    /**
     * @return mixed
     */
    public function getOname()
    {
        return $this->Oname;
    }

    /**
     * @param mixed $Oname
     */
    public function setOname($Oname): void
    {
        $this->Oname = $Oname;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial): void
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getObjType()
    {
        return $this->objType;
    }

    /**
     * @param mixed $objType
     */
    public function setObjType($objType): void
    {
        $this->objType = $objType;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPermited()
    {
        return $this->Permited;
    }

    /**
     * @param mixed $Permited
     */
    public function setPermited($Permited): void
    {
        $this->Permited = $Permited;
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
            $catList[$row["OID"]] = new Tool($row["OID"],$row["Oname"],$row["detail"],$row["serial"],$row["objType"],$row["objStatus"],$row["Permited"]);
        }
        return $catList;
    }

    public static function findByID(string $username): ?Tool {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where OID = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($cat = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $cata = self::findAll();
            return $cata[$cat['OID']];
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
        $query .= " WHERE OID = ".$this->getOID();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }
}