<?php

class OrderService
{
    private $orderId;
    private $companyName;
    private $supplierName;
    private $deliveryAddress;
    private $referenceNumber;
    private $dates;
    private $quantity;
    private $descriptionAgreedPrice;

    /**
     * @param $orderId
     * @param $companyName
     * @param $supplierName
     * @param $deliveryAddress
     * @param $referenceNumber
     * @param $dates
     * @param $quantity
     * @param $descriptionAgreedPrice
     */
    public function __construct($orderId, $companyName, $supplierName, $deliveryAddress, $referenceNumber, $dates, $quantity, $descriptionAgreedPrice)
    {
        $this->orderId = $orderId;
        $this->companyName = $companyName;
        $this->supplierName = $supplierName;
        $this->deliveryAddress = $deliveryAddress;
        $this->referenceNumber = $referenceNumber;
        $this->dates = $dates;
        $this->quantity = $quantity;
        $this->descriptionAgreedPrice = $descriptionAgreedPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * @param mixed $referenceNumber
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return mixed
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param mixed $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDescriptionAgreedPrice()
    {
        return $this->descriptionAgreedPrice;
    }

    /**
     * @param mixed $descriptionAgreedPrice
     */
    public function setDescriptionAgreedPrice($descriptionAgreedPrice)
    {
        $this->descriptionAgreedPrice = $descriptionAgreedPrice;
    }
}