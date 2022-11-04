<?php

class Supplier
{
    private $supplierId;
    private $supplierName;
    private $supplierEmail;
    private $supplierMobile;
    private $supplierAddress;

    /**
     * @param $supplierId
     * @param $supplierName
     * @param $supplierEmail
     * @param $supplierMobile
     * @param $supplierAddress
     */
    public function __construct($supplierId, $supplierName, $supplierEmail, $supplierMobile, $supplierAddress)
    {
        $this->supplierId = $supplierId;
        $this->supplierName = $supplierName;
        $this->supplierEmail = $supplierEmail;
        $this->supplierMobile = $supplierMobile;
        $this->supplierAddress = $supplierAddress;
    }

    /**
     * @return mixed
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param mixed $supplierId
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
    }

    /**
     * @return mixed
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * @param mixed $supplierName
     */
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return mixed
     */
    public function getSupplierEmail()
    {
        return $this->supplierEmail;
    }

    /**
     * @param mixed $supplierEmail
     */
    public function setSupplierEmail($supplierEmail)
    {
        $this->supplierEmail = $supplierEmail;
    }

    /**
     * @return mixed
     */
    public function getSupplierMobile()
    {
        return $this->supplierMobile;
    }

    /**
     * @param mixed $supplierMobile
     */
    public function setSupplierMobile($supplierMobile)
    {
        $this->supplierMobile = $supplierMobile;
    }

    /**
     * @return mixed
     */
    public function getSupplierAddress()
    {
        return $this->supplierAddress;
    }

    /**
     * @param mixed $supplierAddress
     */
    public function setSupplierAddress($supplierAddress)
    {
        $this->supplierAddress = $supplierAddress;
    }

}