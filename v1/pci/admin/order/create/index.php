<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}

require_once __DIR__ . "./../../../../api/services/OrderService.php";

$orderService = new OrderService();
if ($method === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    if (!empty($data->companyName)) {
        $orderData = new Order($data->orderId, $data->companyName, $data->supplierName,
            $data->deliveryAddress, $data->referenceNumber, $data->dates, $data->quantity,
            $data->descriptionAgreedPrice, $data->status);
        $response = $orderService->addOrder($orderData);
        if ($response) {
            echo json_encode(array(
                "message" => "Order created successfully",
                "status" => "success"
            ));
            http_response_code(200);
        } else {
            echo json_encode(array(
                "message" => "Order creation failed",
                "status" => "failed"
            ));
            http_response_code(204);
        }
    } else {
        echo json_encode([
            'status' => -1,
            'message' => 'Required fields are missing'
        ]);
        http_response_code(400);
    }
} else {
    echo json_encode([
        'status' => -1
    ]);
}