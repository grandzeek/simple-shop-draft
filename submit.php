<?php
$host = "localhost";
$user = "root";
$password = ""; // set your DB password
$dbname = "intouch";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form inputs
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$meeting_location = $_POST['meeting_location'] ?? '';
$preferred_date = $_POST['date'] ?? null;
$preferred_time = $_POST['time'] ?? null;
$property_location = $_POST['location'] ?? '';
$message = $_POST['message'] ?? '';

// Insert into database
$sql = "INSERT INTO contacts 
    (name, email, phone, meeting_location, preferred_date, preferred_time, property_location, message)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssss",
    $name,
    $email,
    $phone,
    $meeting_location,
    $preferred_date,
    $preferred_time,
    $property_location,
    $message
);

if ($stmt->execute()) {
    echo "Success! Data saved.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
