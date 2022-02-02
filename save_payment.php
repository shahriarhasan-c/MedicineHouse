<?php
    require('./config.php');   
    session_start();
        if(isset($_POST['csrf_token'])){
            if($_POST['csrf_token'] == $_SESSION['csrf_token']){  
                $name = $_POST['name'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $medicin_list = '';

                $cart = "SELECT * FROM `cart`";
                $result = mysqli_query($con, $cart);


                while($row = mysqli_fetch_array($result)){
                    $prod_id = $row['prod_id'];
                    $quantity = $row['quantity'];
                    $query = "INSERT INTO `order`(`email`, `medicin_id`, `quantity`) VALUES ('$email', $prod_id, $quantity)";
                    mysqli_query($con, $query);
                }

    
                $query = "INSERT INTO `payment`(`name`,`email`, `contact`, `address`) VALUES ('$name','$email','$contact','$address')";
                if(mysqli_query($con, $query)){
                    $_SESSION['payment'] = "Submission Done";
                    $query2 = "DELETE FROM cart";
                    mysqli_query($con, $query2);
                    header('location: shopping_cart.php');
                }else{
                    $_SESSION['payment'] = "Something Went Wrong";
                    header('location: shopping_cart.php');
                    
                }
        }
        
    }
    
    
?>