<?php
session_start();
require_once '../../classes/Database.php';
require_once '../../classes/Validation.php';
require_once '../../classes/Order.php';
require_once '../../classes/Customer.php';
require_once '../../classes/Product.php';
$db = new Database;
$validation = new Validation;
$order = new Order();
if ($_POST['action'] == 'create') {
    $data = [
        'order_number' => $_POST['order_number'],
        'date' => date('Y-m-d'),
        'qty' => $_POST['qty'],
        'total_price' => Product::find($_POST['product_id'])->sell_price * $_POST['qty'],
        'customer_id' => $_POST['customer_id'],
        'product_id' => $_POST['product_id']
    ];
    // Validate
    $rules = [
        'order_number' => 'required',
        'date' => 'required',
        'qty' => 'required|numeric',
        'total_price' => 'required|numeric',
        'customer_id' => 'required',
        'product_id' => 'required'
    ];

    $validation->validate($data, $rules);
    if ($validation->hasError()) {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => $validation->getErrorMessages()[array_key_first($validation->getErrorMessages())][0]
        ];
        header('Location: create.php');
        die();
    }
    // End Validate

    if ($order->create($data)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Order created successfully'
        ];
        header('Location: list.php');
        die();
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => 'Something went wrong'
        ];
        header('Location: create.php');
        die();
    }
} elseif ($_POST['action'] == 'update') {
    $data = [
        'id' => $_POST['id'],
        'order_number' => $_POST['order_number'],
        'date' => date('Y-m-d'),
        'qty' => $_POST['qty'],
        'total_price' => Product::find($_POST['product_id'])->sell_price * $_POST['qty'],
        'customer_id' => $_POST['customer_id'],
        'product_id' => $_POST['product_id']
    ];
    // Validate
    $rules = [
        'order_number' => 'required',
        'date' => 'required',
        'qty' => 'required|numeric',
        'total_price' => 'required|numeric',
        'customer_id' => 'required',
        'product_id' => 'required'
    ];

    $validation->validate($data, $rules);
    if ($validation->hasError()) {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => $validation->getErrorMessages()[array_key_first($validation->getErrorMessages())][0]
        ];
        header('Location: edit.php?id=' . $_POST['id']);
        die();
    }
    // End Validate

    if ($order->update($data)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Order updated successfully'
        ];
        header('Location: list.php');
        die();
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => 'Something went wrong'
        ];
        header('Location: edit.php?id=' . $_POST['id']);
        die();
    }
} elseif ($_POST['action'] == 'delete') {
    if ($order->delete($_POST['id'])) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Order deleted successfully'
        ];
        header('Location: list.php');
        die();
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => 'Something went wrong'
        ];
        header('Location: list.php');
        die();
    }
} else {
    die('Method not found');
}
