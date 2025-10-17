<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'functions.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode(getRecords());
        break;

    case 'POST':
        error_log("POST data received: " . print_r($_POST, true));
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $store = $_POST['store'];
        $unikey = $_POST['unikey'];
        if (createRecord($first_name, $last_name, $phone, $store, $unikey)) {
            echo json_encode(['message' => 'Record created successfully!']);
        } else {
            echo json_encode(['message' => 'Error creating record.']);
        }
        break;

    case 'PUT':
        parse_str(file_get_contents("php://input"), $_PUT);
        $id = $_PUT['id'];
        $first_name = $_PUT['first_name'];
        $last_name = $_PUT['last_name'];
        $phone = $_PUT['phone'];
        $store = $_PUT['store'];
        $unikey = $_PUT['unikey'];
        if (updateRecord($id, $first_name, $last_name, $phone, $store, $unikey)) {
            echo json_encode(['message' => 'Record updated successfully!']);
        } else {
            echo json_encode(['message' => 'Error updating record.']);
        }
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        $id = $_DELETE['id'];
        if (deleteRecord($id)) {
            echo json_encode(['message' => 'Record deleted successfully!']);
        } else {
            echo json_encode(['message' => 'Error deleting record.']);
        }
        break;

    default:
        echo json_encode(['message' => 'Method not supported.']);
        break;
}
?>