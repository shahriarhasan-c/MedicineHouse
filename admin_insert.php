<?php

         $conn = mysqli_connect("localhost", "root", "", "project");
         if(isset($_POST['upload'])) {

                $filename = $_FILES['uploadfile']['name'];

                     $filetmpname = $_FILES['uploadfile']['tmp_name'];
                     $name = $_POST['name'];
                     $price = $_POST['price'];
                     $identity = $_POST['price1'];

                $folder = 'imagesuploadedf/';
                move_uploaded_file($filetmpname, $folder.$filename);
                $sql = "INSERT INTO `medicine_list` (`pname`, `image`, `price`,`identity`) VALUES ('$name','$filename','$price','$identity') ";
                $qry = mysqli_query($conn,  $sql);
                if( $qry) {

                          echo "

          				    <script>

                                  alert ('Your Documents Uploaded.....');
                                  window.location.href='admin_insert.php';

          				    </script>

          				";

                 }
                 else
                 {
                 	echo "

          				    <script>

                                  alert ('Oops! Sorry...Your Documents Not Uploaded.....');
                                  window.location.href='admin_insert.php';

          				    </script>

          				";
                 }
            }
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin_insert_css.css">
</head>
<body>
   <form action="admin_insert.php" method="POST" enctype="multipart/form-data">
     	<div class="registration">
          <h1>Insert Medicine</h1>
       	  <input type="text" name="name" id="name" placeholder="Enter medicine name"><br><br>
       	  <input type="file" name="uploadfile" /><br><br>
           <input type="text" name="price" id="name" placeholder="Enter medicine price"><br><br>
           <input type="text" name="price1" id="name" placeholder="Enter medicine identity code"><br><br>
          <input type="submit" name="upload" value="upload" />
          <form method="POST" style="top: 20px;">
    <input type="submit" name="back" value="Back to page" class="btn btn-info">
  </form>
  <?php
      $con = mysqli_connect("localhost", "root", "", "project");
       if (isset($_POST['back']))
       {   
        echo "

                      <script>

                            
                                  window.location.href='admin_page.php';

                      </script>

                  ";

       }

  ?>
       </div>
    </form>

</body>
</html>
