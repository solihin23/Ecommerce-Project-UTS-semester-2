<?php
session_start();
require_once '../../classes/Database.php';
require_once '../../classes/Customer.php';
require_once '../../classes/Validation.php';
$db = new Database;
$validation = new Validation;
$customer = new Customer();
if ($_POST['action'] == 'create') {
    // Validate
    $rules = [
        'name' => 'required|min:3|max:20',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'gender' => 'required',
        'address' => 'required|min:3|max:20',
        'card_id' => 'required',
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

    if ($customer->create($_POST)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Customer created successfully'
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
        'name' => 'required|min:3|max:20',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'gender' => 'required',
        'address' => 'required|min:3|max:20',
        'card_id' => 'required',
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

    if ($customer->update($_POST)) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Customer updated successfully'
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
    if ($customer->delete($_POST['id'])) {
        $_SESSION['message'] = [
            'type' => 'success',
            'message' => 'Customer deleted successfully'
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
