<?php
class Member{


    private $uid;
    private $kuID;
    private $prename;
    private $firstname;
    private $lastname;
    private $types;
    private $email;
    private $USERROLES;
    private const TABLE = "members";

    /**
     * Member constructor.
     * @param $uid
     * @param $kuID
     * @param $prename
     * @param $firstname
     * @param $lastname
     * @param $types
     * @param $email
     * @param $USERROLES
     */
    public function __construct($uid, $kuID, $prename, $firstname, $lastname, $types, $email, $USERROLES)
    {
        $this->uid = $uid;
        $this->kuID = $kuID;
        $this->prename = $prename;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->types = $types;
        $this->email = $email;
        $this->USERROLES = $USERROLES;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getKuID()
    {
        return $this->kuID;
    }

    /**
     * @param mixed $kuID
     */
    public function setKuID($kuID): void
    {
        $this->kuID = $kuID;
    }

    /**
     * @return mixed
     */
    public function getPrename()
    {
        return $this->prename;
    }

    /**
     * @param mixed $prename
     */
    public function setPrename($prename): void
    {
        $this->prename = $prename;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types): void
    {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUSERROLES()
    {
        return $this->USERROLES;
    }

    /**
     * @param mixed $USERROLES
     */
    public function setUSERROLES($USERROLES): void
    {
        $this->USERROLES = $USERROLES;
    }

    public static function findAll(): array {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        $memberList  = array();
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            $memberList[$row["uid"]] = new Member($row["uid"],$row["kuID"],$row["prename"],$row["firstname"],$row["lastname"],$row["types"],$row["email"],$row["USERROLES"]);
        }
        return $memberList;
    }

    public static function findByAccount(string $username): ?Member {
        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE." where uid = '$username'";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        if ($memb = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $member = self::findAll();
            return $member[$memb['uid']];
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
        $query .= " WHERE id = ".$this->getId();
        $con = Db::getInstance();
        $res = $con->exec($query);
        return $res;
    }



}