 <?php
         
          //for database connection
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);
          //first check user clicked on sign up button or not
          if (isset($_POST['reg'])) {
          	$name = $_POST['name'];
          	$email = $_POST['email'];
          	$pass = $_POST['pass'];
          	$cpass = $_POST['cpass'];
            $contact = $_POST['contact'];
          	// password check

          	if ($pass == $cpass) {
          		$pass =  md5($pass);
          		//check email address is used previous again or not
          		     $query = " SELECT * FROM user WHERE User_Email = '$email' ";
          		     $query_check= mysqli_query( $con , $query);
          		     //check query is run or not at all
          		if ($query_check) {
          			
          			//now check email is occured more than one or not
          			if (mysqli_num_rows($query_check)>0) {
          				
          				echo "

          				    <script>

                                  alert ('Email Already In Use');
                                  window.location.href='logIn_html.php';

          				    </script>

          				";
          			}
          			else
          			{
          				   $insetion = "INSERT INTO user (User_Name,User_Email,User_Password,User_Phone_Number) VALUES ('$name','$email','$pass','$contact') ";
                           $run= mysqli_query($con,$insetion);
          				   //check connection established or not
          				   if ($run) {
          				   	    
          				   	    echo "

          				    <script>

                                  alert ('You Are Succesfully Register:');
                                  window.location.href='logIn_html.php';

          				    </script>

          				";
          				   }
          				   else
          				   {
          				   	   echo "

          				    <script>

                                  alert ('Connection Failed:');
                                  window.location.href='registration_html.php';

          				    </script>

          				";
          				   }
          			}
          		}
          		else
          		{
          			 echo "

          				    <script>

                                  alert ('Database Error:');
                                  window.location.href='registration_html.php';

          				    </script>

          				";
          		}
          	}
          	else
          	{
          		 echo "

          				    <script>

                                  alert ('Password do not match:');
                                  window.location.href='registration_html.php';

          				    </script>

          				";
          	}
          }
          else
          {
          	//signup button
          }
?>