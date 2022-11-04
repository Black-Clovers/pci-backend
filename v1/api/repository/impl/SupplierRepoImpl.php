<?php

require_once __DIR__ . './../../repository/SupplierRepo.php';
require_once __DIR__ . './../../model/Supplier.php';

class SupplierRepoImpl implements SupplierRepo
{

    private $connection;

    public function addSupplier(Supplier $supplier): bool
    {
        $response = $this->connection->query("INSERT INTO supplier(supplierName,supplierEmail,supplierMobile,supplierAddress) VALUES('{$supplier->getSupplierName()}','{$supplier->getSupplierEmail()}','{$supplier->getSupplierMobile()}','{$supplier->getSupplierAddress()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSupplier($id): bool
    {
        $response = $this->connection->query("DELETE FROM supplier WHERE supplierId='{$id}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchSupplier($id): array
    {
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM supplier WHERE supplierId='{$id}'");
        $i = 0;
        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['supplierId'] = $row['supplierId'];
            $data[$i]['supplierName'] = $row['supplierName'];
            $data[$i]['supplierEmail'] = $row['supplierEmail'];
            $data[$i]['supplierMobile'] = $row['supplierMobile'];
            $data[$i]['supplierAddress'] = $row['supplierAddress'];
            $i++;
        }

        return $data;
    }

    public function updateSupplier(Supplier $supplier): bool
    {
        $response = $this->connection->query("UPDATE supplier SET supplierName='{$supplier->getSupplierName()}',supplierEmail='{$supplier->getSupplierEmail()}',supplierMobile='{$supplier->getSupplierMobile()}',supplierAddress='{$supplier->getSupplierAddress()}' WHERE supplierId='{$supplier->getSupplierId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllSupplier(): array
    {
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM supplier");
        $i = 0;
        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['supplierId'] = $row['supplierId'];
            $data[$i]['supplierName'] = $row['supplierName'];
            $data[$i]['supplierEmail'] = $row['supplierEmail'];
            $data[$i]['supplierMobile'] = $row['supplierMobile'];
            $data[$i]['supplierAddress'] = $row['supplierAddress'];
            $i++;
        }

        return $data;
    }

    public function setConnection(Mysqli $connection)
    {
        $this->connection = $connection;
    }
}