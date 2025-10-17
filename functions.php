<?php
require_once 'db_connect.php';

function createRecord($first_name, $last_name, $phone, $store, $unikey) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone, store, unikey) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $phone, $store, $unikey);
    $stmt->execute();
    return $stmt->insert_id;
}

function getRecords() {
    global $conn;
    $result = $conn->query("SELECT id, first_name, last_name, phone, store, unikey FROM users");
    $records = [];
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
    return $records;
}

function getRecordById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT id, first_name, last_name, phone, store, unikey FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function updateRecord($id, $first_name, $last_name, $phone, $store, $unikey) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, phone = ?, store = ?, unikey = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $first_name, $last_name, $phone, $store, $unikey, $id);
    return $stmt->execute();
}

function deleteRecord($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>