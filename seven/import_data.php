<?php

require 'vendor/autoload.php';
include 'setup.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_FILES['file']['name'])) {
    $file_path = $_FILES['file']['tmp_name'];

    // Load the Excel file
    $spreadsheet = IOFactory::load($file_path);
    $sheet = $spreadsheet->getActiveSheet();

    // Iterate through rows and insert data into the database
    foreach ($sheet->getRowIterator() as $row) {
        $data = [];
        foreach ($row->getCellIterator() as $cell) {
            $data[] = $cell->getValue();
        }

        if (!empty($data[0]) && !empty($data[1]) && !empty($data[2])) {
            // Create a new connection inside the loop
            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Use real_escape_string
            $name = $conn->real_escape_string($data[1]);
            $email = $conn->real_escape_string($data[2]);

            $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
            $result = $conn->query($sql);

            if (!$result) {
                die("Error inserting data: " . $conn->error);
            }

            // Close the database connection after the insert
            $conn->close();
        }
    }

    echo "Data imported successfully!";
} else {
    echo "Please choose a file to import.";
}

?>