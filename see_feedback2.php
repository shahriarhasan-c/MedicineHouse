<?php

$email = $_GET['email'];

error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "project");
$status = 'OK';
$content = [];
if (mysqli_connect_errno()) {
$status = 'ERROR';
$content = mysqli_connect_error();
}
$query = "SELECT * FROM appointment where email = '$email'";
if ($result = mysqli_query($link, $query)) {
/* fetch associative array */
while ($row = mysqli_fetch_assoc($result)) {
$content[] = $row; // push value to array
}
}
$data = ["status" => $status, "content" => $content];
header('Content-type: application/json');
echo json_encode($data); // get all products in json format.
?>


