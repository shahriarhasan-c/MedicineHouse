 <?php
         
          //for database connection
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);
          //first check user clicked on sign up button or not
          if (isset($_POST['sub'])) {
          	$name = $_POST['patient'];
          	$age1 = $_POST['age'];
          	$email1 = $_POST['email'];
          	$disease1 = $_POST['disease'];
            $description1 = $_POST['description'];

            
                     $insetion = "INSERT INTO appointment (patient_name, age, email,   other_disease, problem_description) VALUES ('$name', '$age1','$email1', '$disease1', '$description1') ";
                           $run= mysqli_query($con,$insetion);
                     //check connection established or not
                     if ($run) {
                          
                          echo "

                      <script>

                                  alert ('Successfully Submitted:');
                                  window.location.href='shopping_cart.php';

                      </script>

                  ";
                     }
                     else
                     {
                         echo "

                      <script>

                                  alert ('Connection Failed:');
                                  window.location.href='suggestion.php';

                      </script>

                  ";
                     }
                

          }
          else
          {
          	//signup button
          }
?>