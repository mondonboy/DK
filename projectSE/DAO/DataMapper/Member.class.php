<?php
class Member{

     
    private $ID;
    private $username;
    private $password;
    private $name;
    private $surname;
    

    public function getMemberID() :int{
        return $this->ID;
    }

    public function getUsername() :string{
        return $this->username;
    }

    public function getPassword() :string{
        return $this->password;
    }

    public function getName() :string{
        return $this->name;
    }

    public function getSurname() :string{
        return $this->surname;
    }

    public function setId(int $id) {
        $this->ID = $id;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setSurname(string $surname) {
        $this->surname = $surname;
    }
    

    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }

}