<?php

require_once __DIR__ . "./../model/Supplier.php";
require_once __DIR__ . "./../bo/impl/SupplierBOImpl.php";

class SupplierService
{

    private $supplierBO;

    public function __construct()
    {
        $this->supplierBO = (new SupplierBOImpl());
    }


    public function addSupplier(Supplier $supplier): bool
    {
        return $this->supplierBO->addSupplier($supplier);
    }

    public function deleteSupplier($id): bool
    {
        return $this->supplierBO->deleteSupplier($id);
    }

    public function searchSupplier($id): array
    {
        return $this->supplierBO->searchSupplier($id);
    }

    public function updateSupplier(Supplier $supplier): bool
    {
        return $this->supplierBO->updateSupplier($supplier);
    }

    public function getAllSupplier(): array
    {
        return $this->supplierBO->getAllSupplier();
    }
}