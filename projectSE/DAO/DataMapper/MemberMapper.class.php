<?php
class MemberMapper{

    private $memberList;
    private const TABLE = "member";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        $stmt->execute();
        $this->memberList  = array();
        while ($memb = $stmt->fetch())
        {
            $this->memberList[$memb->getUid()] = $memb;
        }
    }

    public function getAll(): array {
        return $this->memberList;
    }
    public function get(int $id): ?Member {
        return $this->memberList[$id]??null;
    }

    public function update(Member $memb): bool {

        if (isset($this->memberList[$memb->getUid()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $membIt = $memb->getIterator();
            foreach ($membIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE id = ".$memb->getUid();
            //echo $query;
            $con = Db::getInstance();
            if ($con->exec($query) === true) {
                $this->memberList[$memb->getUid()] = $memb;
                return true;
            }
            return false;
        }
        else {
            throw new Exception("Member doesn't exist");
        }

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
        $this->ID = $con->lastInsertId();
        return $res;
    }


}