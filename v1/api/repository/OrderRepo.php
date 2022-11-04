<?php
require_once __DIR__ . './../model/Order.php';

interface OrderRepo
{
    public function addOrder(Order $order): bool;

    public function deleteOrder($id): bool;

    public function searchOrder($id): array;

    public function updateOrder(Order $order): bool;

    public function getAllOrder(): array;

    public function setConnection(Mysqli $connection);
}