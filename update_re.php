
<?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $update =  "UPDATE medicine_list SET pname = '$_POST[pname]',price = '$_POST[price]' WHERE id = '$_POST[id]' ";
       if (mysqli_query($con,$update )) {
       	  
       	  header("refresh:1; url:update_rec.php");
       	  echo "

          				    <script>

                                  alert ('Records updated:');
                                  window.location.href='update_rec.php';

          				    </script>

          				";
          				 
       }
       else
       {
       	echo "sorry";
       }
?>
