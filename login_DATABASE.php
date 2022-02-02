<?php
    
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);
          //check log in clicked or not
          if (isset($_POST['submit'])) {
          	  
          	  $email = $_POST['email'];
          	  $passw = $_POST['pass'];
			  $passw = md5($passw);
          	  $query = "SELECT * FROM user WHERE User_Email='$email' AND User_Password = '$passw' ";
          	  $run =mysqli_query($con,$query);
          	  //now check is it run or not
          	  if ($run) {
          	  	
          	  	 //now check how many rows
          	  	if (mysqli_num_rows($run)>0) {

					 
						session_start();
						$token = md5(uniqid(rand(),true));
						$_SESSION['csrf_token'] = $token;
						header("Location:shopping_cart.php");
					  

          	  			
          			
          	  	}
          	  	else
          	  	{
          	  			echo "

          				    <script>

                                  alert ('You Are Not Registered please register first:');
                                  window.location.href='registration_html.php';

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