<?php
require_once 'functions.php';

echo "Generating 10 dummy records...\n";

for ($i = 1; $i <= 10; $i++) {
    $first_name = "FirstName" . $i;
    $last_name = "LastName" . $i;
    $phone = "123-456-78" . str_pad($i, 2, '0', STR_PAD_LEFT);
    $store = "Store" . $i;
    $unikey = "UNIKEY" . str_pad($i, 3, '0', STR_PAD_LEFT);

    $result = createRecord($first_name, $last_name, $phone, $store, $unikey);

    if ($result) {
        echo "Record " . $i . " created successfully with ID: " . $result . "\n";
    } else {
        echo "Error creating record " . $i . ": " . $conn->error . "\n";
    }
}

echo "Dummy record generation complete.\n";
?>