<?php
require_once __DIR__ . './../../repository/OrderRepo.php';
require_once __DIR__ . './../../model/Order.php';

class OrderRepoImpl implements OrderRepo
{

    private $connection;

    public function addOrder(Order $order): bool
    {
        $response = $this->connection->query("INSERT INTO orders(companyName,supplierName,deliveryAddress,
                                                    referenceNumber,dates,quantity,descriptionAgreedPrice) 
                    VALUES('{$order->getCompanyName()}','{$order->getSupplierName()}','{$order->getDeliveryAddress()}',
                                    '{$order->getReferenceNumber()}','{$order->getDates()}','{$order->getQuantity()}',
                                                                            '{$order->getDescriptionAgreedPrice()}','{$order->getStatus()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteOrder($id): bool
    {
        $response = $this->connection->query("DELETE FROM orders WHERE orderId='{$id}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchOrder($id): array
    {
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM orders WHERE orderId='{$id}'");
        $i = 0;

        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['orderId'] = $row['orderId'];
            $data[$i]['companyName'] = $row['companyName'];
            $data[$i]['supplierName'] = $row['supplierName'];
            $data[$i]['deliveryAddress'] = $row['deliveryAddress'];
            $data[$i]['referenceNumber'] = $row['referenceNumber'];
            $data[$i]['dates'] = $row['dates'];
            $data[$i]['quantity'] = $row['quantity'];
            $data[$i]['descriptionAgreedPrice'] = $row['descriptionAgreedPrice'];
            $data[$i]['status'] = $row['status'];
            $i++;
        }

        return $data;
    }

    public function updateOrder(Order $order): bool
    {
        $response = $this->connection->query("UPDATE orders SET companyName='{$order->getCompanyName()}',
                supplierName='{$order->getSupplierName()}',deliveryAddress='{$order->getDeliveryAddress()}' 
                referenceNumber='{$order->getReferenceNumber()}',dates='{$order->getDates()}' 
                quantity='{$order->getQuantity()}',descriptionAgreedPrice='{$order->getDescriptionAgreedPrice()}',status='{$order->getStatus()}'  
            WHERE orderId='{$order->getOrderId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllOrder(): array
    {
        $data = [];
        $resultSet = $this->connection->query("SELECT * FROM orders");
        $i = 0;
        while ($row = $resultSet->fetch_assoc()) {
            $data[$i]['orderId'] = $row['orderId'];
            $data[$i]['companyName'] = $row['companyName'];
            $data[$i]['supplierName'] = $row['supplierName'];
            $data[$i]['deliveryAddress'] = $row['deliveryAddress'];
            $data[$i]['referenceNumber'] = $row['referenceNumber'];
            $data[$i]['dates'] = $row['dates'];
            $data[$i]['quantity'] = $row['quantity'];
            $data[$i]['descriptionAgreedPrice'] = $row['descriptionAgreedPrice'];
            $data[$i]['status'] = $row['status'];
            $i++;
        }

        return $data;
    }

    public function setConnection(Mysqli $connection)
    {
        $this->connection = $connection;
    }
}
