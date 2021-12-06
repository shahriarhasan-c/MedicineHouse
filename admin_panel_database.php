<?php
    
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);
          if ($con) {
            
            echo "hello";
          }
          else
          {
            echo "not";
          }
          //check log in clicked or not
          if (isset($_POST['submit'])) {
          	  
          	  $email = $_POST['name'];
          	  $passw = $_POST['pass'];
          	  $query = "SELECT * FROM admin_login WHERE user_name = '$email' AND  user_password = '$passw' ";
          	  $run =mysqli_query($con,$query);
          	  //now check is it run or not
          	  if ($run) {
          	  	
          	  	 //now check how many rows
          	  	if (mysqli_num_rows($run)>0) {

          	  			echo "

          				    <script>

                                  alert ('You Are In Log In:');
                                  window.location.href='admin_page.php';

          				    </script>

          				";
          			
          	  	}
          	  	else
          	  	{
          	  			echo "

          				    <script>

                                  alert ('oops! please try again:');
                                  window.location.href='admin_panel.php';

          				    </script>

          				";
          	  	}
          	  }
          	  else
          	  {
          	  	
          	  		echo "

          				    <script>

                                  alert ('Database Connection Error');
                                  window.location.href='logIn_html.php';

          				    </script>

          				";
          	  }
          }
          else
          { //for login else
          	echo "connection failed";
            

          }
?>