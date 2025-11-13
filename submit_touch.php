<?php
$host = "localhost";
$user = "root"; // default for XAMPP
$password = "";
$dbname = "docnest";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];

// Prepare and execute insert
$sql = "INSERT INTO `touch with us` (name, email, contact_no) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $contact_no);

if ($stmt->execute()) {
    echo "<script>alert('Submission successful!'); window.location.href='home.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
