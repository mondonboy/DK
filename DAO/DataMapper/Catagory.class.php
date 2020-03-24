<?php


class Catagory
{
    private  $OT_ID;
    private $OT_Name;

    /**
     * @return mixed
     */
    public function getOTID()
    {
        return $this->OT_ID;
    }

    /**
     * @param mixed $OT_ID
     */
    public function setOTID($OT_ID): void
    {
        $this->OT_ID = $OT_ID;
    }

    /**
     * @return mixed
     */
    public function getOTName()
    {
        return $this->OT_Name;
    }

    /**
     * @param mixed $OT_Name
     */
    public function setOTName($OT_Name): void
    {
        $this->OT_Name = $OT_Name;
    }

    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }
}