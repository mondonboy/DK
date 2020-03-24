<?php
require Router::getSourcePath() . "views/ldap.php";
require "./DAO/DataMapper/Member.class.php";
class MemberMapper{

    private $memberList;
    private const TABLE = "member";

    public function __construct() {

        $con = Db::getInstance();
        $query = "SELECT * FROM member";
        $stmt = $con->query($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "Member");
        //$stmt->execute();
        $this->memberList  = array();
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        {
            $memb = new Member();
            $memb->setUid($row['uid']);
            $memb->setKuID($row['kuID']);
            $memb->setPrename($row['prename']);
            $memb->setFirstname($row['firstname']);
            $memb->setLastname($row['lastname']);
            $memb->setType($row['types']);
            $memb->setEmail($row['email']);
            $memb->setUSERROLES($row['USERROLES']);
            $this->memberList[$memb->getUid()] = $memb;
        }
    }

    public function getAll(): array {
        return $this->memberList;
    }
    public function findByUid(int $id): ?Member {
        return $this->memberList[$id]??null;
    }
    public function Auth(string $user, string $pass, string $fil){
            return user_authen($user,$pass,$fil);
    }

    public function update(Member $memb): bool {

        if (isset($this->memberList[$memb->getUid()])) {
            $query = "UPDATE ".self::TABLE." SET ";
            $membIt = $memb->getIterator();
            foreach ($membIt as $prop => $val) {
                $query .= " $prop='$val',";
            }
            $query = substr($query, 0, -1);
            $query .= " WHERE uid = ".$memb->getUid();
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

    public function insert(Member $memb) {
        $con = Db::getInstance();
        $values = $memb->getUid().",".$memb->getKuID().",".$memb->getPrename().",".$memb->getFirstname().",".$memb->getLastname().",".$memb->getType().",".$memb->getEmail().",".$memb->getUSESERROLES();
        $values = substr($values,0,-1);
        $query = "INSERT INTO ".self::TABLE." VALUES ($values)";
        //echo $query;
        $res = $con->exec($query);
        $this->memberList[$memb->getUid()] = $memb;
        return $res;
    }


}