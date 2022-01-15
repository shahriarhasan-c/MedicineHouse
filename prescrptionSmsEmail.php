<?php
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);
          
          if (isset($_POST['submit'])) {
             
            $name = $_POST['name']; 
            $email = $_POST['email'];
            $contactNumber = $_POST['contactNumber'];
            $text = $_POST['text'];

           
            

            $to_email = $email;
            $subject = "Medicine Delivery: ";
            $body =  $text." \n\n

                Online Medicine House";
            $headers = "From:ahasan181038@bscse.uiu.ac.bd";
            if(mail( $to_email, $subject, $body,  $headers)) {
                    echo "

                            <script>

                                  alert ('message and email sent successfully:');
                                  window.location.href='admin_prescriptionShow.php';

                            </script>

                        ";
                  

                 }  
        }



        if (isset($_POST['submit1'])) {
             
            $name = $_POST['name']; 
            $email = $_POST['email'];
            $contactNumber = $_POST['contactNumber'];
            $text = $_POST['text'];

           
          

            $to_email = $email;
            $subject = "Medicine Delivery: ";
            $body =  $text." Medicines are available. In addition, we can provide those medicines within 24 hours. If you want to take those medicines then contact with us in given below number. We will cancel your deliver unless you contact with us within 24 hours.\n\ncontact number: 1. Thasin: +8801999626658\n2. Shahriar - +8801679592991.\n\n

                Online Medicine House";
            $headers = "From:ahasan181038@bscse.uiu.ac.bd";
            if(mail( $to_email, $subject, $body,  $headers)) {
                    echo "

                            <script>

                                  alert ('message and email sent successfully:');
                                  window.location.href='admin_prescriptionShow.php';

                            </script>

                        ";
                  

                 }  
        }

?>