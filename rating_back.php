<?php

$id = $_GET['id'];

$database_name = "project";
$con = mysqli_connect("localhost","root","",$database_name);
$status = 'OK';
$content = [];
if (mysqli_connect_errno()) {
$status = 'ERROR';
$content = mysqli_connect_error();
}
      $query = "SELECT * FROM rating WHERE review_id =  $id";
    
      if ($result = mysqli_query($con, $query)) {
        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
        $content[] = $row; // push value to array
        }
        }
        $data = ["status" => $status, "content" => $content];
        header('Content-type: application/json');
        echo json_encode($data);
            // $count++;
             //$sum+= $row["user_rating"];
                ?> 