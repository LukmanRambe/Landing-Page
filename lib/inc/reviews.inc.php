<?php

require_once 'dbh.inc.php';

$sql = "SELECT * FROM reviews";
$result = mysqli_query($connect, $sql);
