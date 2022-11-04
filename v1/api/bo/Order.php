<?php

interface Order
{
    public function addOrder(Order $site): bool;

    public function deleteOrder($id): bool;

    public function searchOrder($id): array;

    public function updateOrder(Order $site): bool;

    public function getAllOrder();
}