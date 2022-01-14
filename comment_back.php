 
<?php
$database_name = "project";
$con = mysqli_connect("localhost","root","",$database_name);
$status = 'OK';
$content = [];
if (mysqli_connect_errno()) {
$status = 'ERROR';
$content = mysqli_connect_error();
}
      $query = "SELECT * FROM comment_box";

      if ($result = mysqli_query($con, $query)) {
        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
        $content[] = $row; // push value to array
        }
        }
        $data = ["status" => $status, "content" => $content];
        header('Content-type: application/json');
        echo json_encode($data); // get all products in json  
        ?>