<?php

try {
    new PDO("mysql:host=".getenv('DB_HOST').";port:".getenv("FORWARD_DB_PORT").";dbname=".getenv("DB_DATABASE")."", getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
} catch(PDOException $e) {
    print_r($e);
}

//// Create connection
//$conn = mysqli_connect(getenv("DB_HOST"),getenv("DB_USERNAME"),getenv("DB_PASSWORD"),getenv("DB_DATABASE"),getenv("FORWARD_DB_PORT"));
//
//// Check connection
//if ($conn->connect_error) {
//    die("DB Connection failed: " . $conn->connect_error);
//}
//echo "DB Connection Success";
?>
