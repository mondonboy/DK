<?php
class Member{

     
    private $uid;
    private $kuID;
    private $prename;
    private $firstname;
    private $lastname;
    private $type;
    private $email;
    private $USESERROLES;

    /**
     * @return mixed
     */
    public function getUid() :string
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getKuID():string
    {
        return $this->kuID;
    }

    /**
     * @param mixed $kuID
     */
    public function setKuID(string $kuID)
    {
        $this->kuID = $kuID;
    }

    /**
     * @return mixed
     */
    public function getPrename():string
    {
        return $this->prename;
    }

    /**
     * @param mixed $prename
     */
    public function setPrename(string $prename)
    {
        $this->prename = $prename;
    }

    /**
     * @return mixed
     */
    public function getFirstname():string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname():string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getType():string
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUSESERROLES() :string
    {
        return $this->USESERROLES;
    }

    public function setUSESERROLES($USESERROLES): string
    {
        $this->USESERROLES = $USESERROLES;
    }
    

    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }

}