<?php
require_once __DIR__ . "./../model/Order.php";
require_once __DIR__ . "./../bo/impl/OrderBOImpl.php";

class OrderService
{

    private $orderBO;

    /**
     * @param $orderBO
     */
    public function __construct()
    {
        $this->orderBO = (new OrderRepoImpl());
    }


    public function addOrder(Order $order): bool
    {
        return $this->orderBO->addOrder($order);
    }

    public function deleteOrder($id): bool
    {
        return $this->orderBO->deleteOrder($id);
    }

    public function searchOrder($id): array
    {
        return $this->orderBO->searchOrder($id);
    }

    public function updateOrder(Order $order): bool
    {
        return $this->orderBO->updateOrder($order);
    }

    public function getAllOrder(): array
    {
        return $this->orderBO->getAllOrder();
    }
}