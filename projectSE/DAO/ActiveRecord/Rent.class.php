<?php


class Rent
{
    private $R_ID;
    private $R_Date;
    private $Person;
    private $Responsible;
    private $arrTool;
    private const TABLE = "tools_status";

    /**
     * Rent constructor.
     * @param $R_ID
     * @param $R_Date
     * @param $Person
     * @param $Responsible
     */
    public function __construct($R_ID, $R_Date, $Person, $Responsible)
    {
        $this->R_ID = $R_ID;
        $this->R_Date = $R_Date;
        $this->Person = $Person;
        $this->Responsible = $Responsible;
        $this->arrTool = array();
    }

    /**
     * @return mixed
     */
    public function getRID()
    {
        return $this->R_ID;
    }

    /**
     * @param mixed $R_ID
     */
    public function setRID($R_ID): void
    {
        $this->R_ID = $R_ID;
    }

    /**
     * @return mixed
     */
    public function getRDate()
    {
        return $this->R_Date;
    }

    /**
     * @param mixed $R_Date
     */
    public function setRDate($R_Date): void
    {
        $this->R_Date = $R_Date;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param mixed $Person
     */
    public function setPerson($Person): void
    {
        $this->Person = $Person;
    }

    /**
     * @return mixed
     */
    public function getResponsible()
    {
        return $this->Responsible;
    }

    /**
     * @param mixed $Responsible
     */
    public function setResponsible($Responsible): void
    {
        $this->Responsible = $Responsible;
    }

    public function addTool(Tool $tool){
        $this->arrTool[$tool->getOID()] = $tool;
    }

    public function getToolArr(){
        return $this->arrTool;
    }

    public function toolFromDB(){
        $con = Db::getInstance();
        $query = "SELECT OID FROM rent_detail WHERE R_ID = '$this->R_ID'";
        $result = $con->query($query);
        foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row){
            $tool = Tool::findByID($row["OID"]);
            $this->addTool($tool);
        }
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
            $rent = new Rent($row["R_ID"],$row["R_Date"],$row["Person"],$row["Responsible"]);
            $rent->toolFromDB();
            $catList[$row["R_ID"]] = $rent;

        }

        return $catList;
    }

    public static function findByID(string $username): ?Rent {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where R_ID = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($cat = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $cata = self::findAll();
            return $cata[$cat['R_ID']];
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
        $query .= " WHERE R_ID = ".$this->getRID();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }

}