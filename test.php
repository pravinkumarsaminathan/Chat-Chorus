<?php 
include 'libs/load.php';

$conn = Database::getConnection();
$result = Database::comment();
$length = Database::length();
echo "<pre>";
print_r($result);
print($length);