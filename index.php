<?php

require_once('./controller/IndexController.php');
require_once('./controller/ProcessOrderCreateController.php');
require_once('./controller/PayController.php');
require_once('./controller/ProcessPaymentController.php');
require_once('./controller/ProcessShippingAddressController.php');
require_once('./controller/ProcessShippingMethodController.php');
require_once('./controller/SetShippingAddressController.php');
require_once('./controller/SetShippingMethodController.php');

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/workshopmethodo/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {
    $indexController = new IndexController();
    $indexController->index();
    return;
} 

if($endUri === "create-order") {
    $createOrderController = new CreateOrderController();
    $createOrderController->createOrder();
    return;
} 

if ($endUri === "pay") {
    $payController = new PayController();
    $payController->pay();
    return;
}

if ($endUri === "process-payment") {
    $payController = new ProcessPaymentController();
    $payController->processPayment();
    return;
}

if ($endUri === "process-shipping-address") {
    $payController = new ProcessShippingAddressController();
    $payController->processShippingAddress();
    return;
}

if ($endUri === "process-shipping-method") {
    $payController = new ProcessShippingMethodController();
    $payController->processShippingMethod();
    return;
}

if ($endUri === "set-shipping-address") {
    $payController = new SetShippingAddressController();
    $payController->setShippingAddress();
    return;
}

if ($endUri === "set-shipping-method") {
    $payController = new SetShippingMethodController();
    $payController->setShippingMethod();
    return;
}