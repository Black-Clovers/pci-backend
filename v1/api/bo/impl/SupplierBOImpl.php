<?php
require_once __DIR__ . "./../../model/Supplier.php";
require_once __DIR__ . "./../../bo/SupplierBO.php";
require_once __DIR__ . "./../../repository/impl/SupplierRepoImpl.php";
require_once __DIR__ . "./../../db/DBConnection.php";

class SupplierBOImpl implements SupplierBO
{

    public function addSupplier(Supplier $supplier): bool
    {
        $supplierRepo = new SupplierRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $supplierRepo->setConnection($connection);
        $newSupplier = new Supplier($supplier->getSupplierId(), $supplier->getSupplierName(), $supplier->getSupplierEmail(),
            $supplier->getSupplierMobile(), $supplier->getSupplierAddress());
        $res = $supplierRepo->addSupplier($newSupplier);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function deleteSupplier($id): bool
    {
        $supplierRepo = new SupplierRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $supplierRepo->setConnection($connection);
        return $supplierRepo->deleteSupplier($id);
    }

    public function searchSupplier($id): array
    {
        $supplierRepo = new SupplierRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $supplierRepo->setConnection($connection);
        return $supplierRepo->searchSupplier($id);
    }

    public function updateSupplier(Supplier $supplier): bool
    {
        $supplierRepo = new SupplierRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $supplierRepo->setConnection($connection);
        return $supplierRepo->updateSupplier($supplier);
    }

    public function getAllSupplier(): array
    {
        $supplierRepo = new SupplierRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $supplierRepo->setConnection($connection);
        return $supplierRepo->getAllSupplier();
    }
}