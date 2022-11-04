<?php


require_once __DIR__ . "./../model/Supplier.php";

interface SupplierBO
{
    public function addSupplier(Supplier $supplier): bool;

    public function deleteSupplier($id): bool;

    public function searchSupplier($id): array;

    public function updateSupplier(Supplier $supplier): bool;

    public function getAllSupplier(): array;
}