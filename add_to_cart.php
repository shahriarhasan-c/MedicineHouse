<?php
    require('./config.php');

    if(isset($_GET['action']) && $_GET['action'] == 'add'){
        $name = $_POST['hidden_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['hidden_price'];
        $id = $_GET['id'];
        $query = "INSERT INTO `cart`(`prod_id`, `prod_name`, `quantity`, `price`) VALUES ($id, '$name', $quantity, '$price')";
        //echo $query;
        mysqli_query($con, $query);
       header('location: ./shopping_cart.php');

    }else if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        $id = $_GET['id'];
        $query = "DELETE FROM `cart` WHERE `id`=$id";
        mysqli_query($con, $query);
        header('location: ./shopping_cart.php');
    }
?>