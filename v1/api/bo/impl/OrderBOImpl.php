<?php

require_once __DIR__ . "./../../model/Order.php";
require_once __DIR__ . "./../../bo/OrderBO.php";
require_once __DIR__ . "./../../repository/impl/OrderRepoImpl.php";
require_once __DIR__ . "./../../db/DBConnection.php";

class OrderBOImpl implements OrderBO
{

    public function addOrder(Order $order): bool
    {
        $orderRepo = new OrderRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $orderRepo->setConnection($connection);
        $newOrder = new Order($order->getOrderId(), $order->getCompanyName(), $order->getSupplierName(),
            $order->getDeliveryAddress(), $order->getReferenceNumber(), $order->getDates(), $order->getQuantity(),
            $order->getDescriptionAgreedPrice());
        $res = $orderRepo->addOrder($newOrder);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function deleteOrder($id): bool
    {
        $orderRepo = new OrderRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $orderRepo->setConnection($connection);
        return $orderRepo->deleteOrder($id);
    }

    public function searchOrder($id): array
    {
        $orderRepo = new OrderRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $orderRepo->setConnection($connection);
        return $orderRepo->searchOrder($id);
    }

    public function updateOrder(Order $order): bool
    {
        $orderRepo = new OrderRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $orderRepo->setConnection($connection);
        $newOrder = new Order($order->getOrderId(), $order->getCompanyName(), $order->getSupplierName(),
            $order->getDeliveryAddress(), $order->getReferenceNumber(), $order->getDates(), $order->getQuantity(),
            $order->getDescriptionAgreedPrice());
        return $orderRepo->updateOrder($newOrder);
    }

    public function getAllOrder(): array
    {
        $orderRepo = new OrderRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $orderRepo->setConnection($connection);
        return $orderRepo->getAllOrder();
    }
}