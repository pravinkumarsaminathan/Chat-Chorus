<?php 
include 'libs/load.php';

$conn = Database::getConnection();
$result = Database::comment();
$length = Database::length();
$sql = "SELECT `like` FROM `list` WHERE `id` = '41' ";
$count = $conn->query($sql);
$results = array();
while ($answer = $count->fetch_assoc()) {
    $results[] = $answer;
}
echo "<pre>";
print_r($result);
print($results['0']['like']);