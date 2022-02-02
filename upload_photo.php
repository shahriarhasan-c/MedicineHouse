<?php

         $conn = mysqli_connect("localhost", "root", "", "project");
         if(isset($_POST['upload'])) {

                $filename = $_FILES['uploadfile']['name'];

                $filetmpname = $_FILES['uploadfile']['tmp_name'];
                     $name = $_POST['name'];
          	         $email = $_POST['email'];
                     $contact = $_POST['contact'];
                     $query = $_POST['paragraph'];

                $folder = 'imagesuploadedf/';
                move_uploaded_file($filetmpname, $folder.$filename);
                $date = date('Y-m-d h:i:s A') ;
                $time = date("h:i a") ;
                
                $sql = "INSERT INTO `uploadedimage` (`imagename`, `name`, `email`, `contact`,`query`,`date`,`time`) VALUES ('$filename','$name','$email','$contact','$query','$date','$time')";
                $qry = mysqli_query($conn,  $sql);
                $to_email = $email;
                $subject = "prescription";
                $body = "Thank you so much for uploading prescription. The prescription has been uploaded sucessfully. We will contact with you soon in order to confirm this deliver. If you have any query, contact with us through this number. The contact number is given below.\ncontact number: Thasin Taha - +8801999626658\n Shahriar - +8801679592991.";
                $headers = "From:ahasan181038@bscse.uiu.ac.bd";
                if( $qry && mail( $to_email, $subject, $body,  $headers)) {

                          echo "

          				    <script>

                                  alert ('prescription has been uploaded sucessfully:');
                                  
                                  window.location.href='upload_photo.php';
          				    </script>

          				";

              
                  

                 }
                 else
                 {
                 	echo "

          				    <script>

                                  alert ('Oops! Sorry...Your Documents Not Uploaded.....');
                                  window.location.href='upload_photo.php';

          				    </script>

          				";
                 }
            }
?>

<?php

session_start();  
if(
        isset($_SESSION['csrf_token'])
        && !empty($_SESSION['csrf_token'])

){

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="upload_photo.css">
</head>
<body style="background color: black">
   <form action="upload_photo.php" method="POST" enctype="multipart/form-data">
     	<div class="registration">
       	  <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
       	  <input type="text" name="email" id="name" placeholder="enter your email"><br><br>
       	  <input type="text" name="contact" id="name" placeholder="Enter your contact number"><br><br>
       	  <input type="text" name="paragraph" id="name" placeholder="Any query"><br><br>
       	  <input type="file" name="uploadfile"  /><br><br>
          <input type="submit" name="upload" value="upload" />
       </div>
    </form>
    

</body>
</html>

<?php
}

else{
	
	header("Location:login_html.php");
	
}

?>