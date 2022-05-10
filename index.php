<?php

try {
    new PDO("mysql:host=".getenv('DB_HOST').";port:".getenv("FORWARD_DB_PORT").";dbname=".getenv("DB_DATABASE")."", getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
} catch(PDOException $e) {
    print_r($e);
}

?>
