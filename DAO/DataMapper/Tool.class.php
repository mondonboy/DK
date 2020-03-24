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

    /**
     * @return mixed
     */
    public function getOID() : string
    {
        return $this->OID;
    }

    /**
     * @param mixed $OID
     */
    public function setOID($OID): string
    {
        $this->OID = $OID;
    }

    /**
     * @return mixed
     */
    public function getOname(): string
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
    public function getDetail(): string
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
    public function getSerial(): string
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
    public function getObjType(): string
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
    public function getStatus(): string
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
    public function getPermited(): string
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



    /**
     * iterator สำหรับวนลูปเข้าถึง properties ทุกตัวของ Product ในลูป foreach ได้
     * @return ArrayIterator iterator ที่มี key เป็นชื่อ property และ value เป็นค่าของ property
     */
    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }
}