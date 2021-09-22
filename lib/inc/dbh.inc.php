<?php

$DB_HOST = "localhost";
$DB_USERNAME = "db_username";
$DB_PASSWORD = "db_password";
$DB_NAME = "website_factory";


$connect = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
