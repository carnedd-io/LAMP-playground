<?php echo "hello world" ?>



<?php
$servername = "localhost";
$username = "database";
$password = "sausages";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
