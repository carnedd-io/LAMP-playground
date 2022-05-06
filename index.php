<?php

// Create connection
$conn = mysqli_connect(getenv("DB_HOST"),getenv("DB_USERNAME"),getenv("DB_PASSWORD"),getenv("DB_DATABASE"),getenv("FORWARD_DB_PORT"));

// Check connection
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
echo "DB Connection Success";
?>
