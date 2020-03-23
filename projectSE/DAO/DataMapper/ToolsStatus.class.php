<?php


class ToolsStatus
{
    private $OS_ID;
    private $OSStatus;

    /**
     * @return mixed
     */
    public function getOSID(): string
    {
        return $this->OS_ID;
    }

    /**
     * @param mixed $OS_ID
     */
    public function setOSID(string $OS_ID)
    {
        $this->OS_ID = $OS_ID;
    }

    /**
     * @return mixed
     */
    public function getOSStatus(): string
    {
        return $this->OSStatus;
    }

    /**
     * @param mixed $OSStatus
     */
    public function setOSStatus(string $OSStatus)
    {
        $this->OSStatus = $OSStatus;
    }

    public function getIterator()
    {
        return new ArrayIterator(get_object_vars($this));
    }
}