
<?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $update =  "UPDATE appointment SET feedback = '$_POST[feedback]' WHERE id = '$_POST[id]' ";
       if (mysqli_query($con,$update )) {
       	  
       	  header("refresh:1; url:seeappointment.php");
       	  echo "

          				    <script>

                                  alert ('Feedback updated:');
                                  window.location.href='seeappointment.php';

          				    </script>

          				";
          				 
       }
       else
       {
       	echo "sorry";
       }
?>
