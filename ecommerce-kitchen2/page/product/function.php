<?php
session_start();
require_once '../../classes/Database.php';
require_once '../../classes/Product.php';
require_once '../../classes/Validation.php';
$db = new Database;
$validation = new Validation;
$product = new Product();
if ($_POST['action'] == 'create') {
    // Validate
    $rules = [
        'name' => 'required',
        'purchase_price' => 'required|numeric',
        'sell_price' => 'required|numeric',
        'stock' => 'required|numeric',
        'min_stock' => 'required|numeric',
        'product_type_id' => 'required|numeric'
    ];

    $validation->validate($_POST, $rules);
    if ($validation->hasError()) {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => $validation->getErrorMessages()[array_key_first($validation->getErrorMessages())][0]
        ];
        header('Location: create.php');
        die();
    }
    // End Validate

    if ($product->create($_POST)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Product created successfully'
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
    // Validate
    $rules = [
        'name' => 'required',
        'purchase_price' => 'required|numeric',
        'sell_price' => 'required|numeric',
        'stock' => 'required|numeric',
        'min_stock' => 'required|numeric',
        'product_type_id' => 'required|numeric'
    ];

    $validation->validate($_POST, $rules);
    if ($validation->hasError()) {
        $_SESSION['message'] = [
            'type' => 'error',
            'message' => $validation->getErrorMessages()[array_key_first($validation->getErrorMessages())][0]
        ];
        header('Location: edit.php?id=' . $_POST['id']);
        die();
    }
    // End Validate

    if ($product->update($_POST)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Product updated successfully'
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
    if ($product->delete($_POST['id'])) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Product deleted successfully'
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
