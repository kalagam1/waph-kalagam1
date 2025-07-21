<?php
session_start();

// Connect to database
$mysqli = new mysqli('localhost', 'kalagam1', 'Mahi@123', 'waph');
if ($mysqli->connect_errno) {
    printf("Database connection failed: %s\n", $mysqli->connect_error);
    exit();
}

// Get input from form
$username = $_POST["username"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];


// Prepare SQL to insert new user
$prepared_sql = "INSERT INTO user (username, password, fullname, email) VALUES (?, md5(?), ?, ?)";
if (!$stmt = $mysqli->prepare($prepared_sql)) {
    echo "Prepare failed.";
    exit();
}

// Bind the parameters
$stmt->bind_param("ssss", $username, $password, $fullname, $email);

// Execute the statement
if (!$stmt->execute()) {
    echo "Execute failed: " . $stmt->error;
    exit();
}

// Show success message
echo "<h2>Registration succeeded. You can now login.</h2>";
?>
