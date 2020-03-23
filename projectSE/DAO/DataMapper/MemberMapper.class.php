<?php
class MemberMapper{

    private $memberList;
    private const TABLE = "members";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM ".self::TABLE;
        $stmt = $con->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        $stmt->execute();
        $this->memberList  = array();
        while ($memb = $stmt->fetch())
        {
            $this->memberList[$memb->getMemberID()] = $memb;
        }
    }

    public function getAll(): array {
        return $this->memberList;
    }
    public function get(int $id): ?Member {
        return $this->memberList[$id]??null;
    }

    public function update(Member $memb): bool {

        if (isset($this->memberList[$memb->getMemberID()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $membIt = $memb->getIterator();
            foreach ($membIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE id = ".$memb->getMemberID();
            //echo $query;
            $con = Db::getInstance();
            if ($con->exec($query) === true) {
                $this->memberList[$memb->getMemberID()] = $memb;
                return true;
            }
            return false;
        }
        else {
            throw new Exception("Member doesn't exist");
        }

    }


}