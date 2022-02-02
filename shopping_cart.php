<?php
    session_start();
    require('./config.php');
    if(isset($_SESSION['payment'])){
        echo '<script>alert("'.$_SESSION['payment'].'")</script>';
        unset($_SESSION['payment']);
    } 
   
?>

<?php

session_start();  
if(
        isset($_SESSION['csrf_token'])
        && !empty($_SESSION['csrf_token'])

){

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_s.css">
    <style type="text/css">
        .button5 {background-color: orange;}
    </style>
</head>

<body>
<div class="logout" style="margin-left: : 10px;">
<a href="logout.php"><input type="button" name="logout" value="Logout"></a>
<?php
echo $_SESSION['csrf_token'];
?>
</div>
    <form action="search.php" method="POST">
         <div class="search_box" style="margin-left: : 10px;">
            <input type="text" name="valueToSearch" placeholder="Search here..." class="valueToSearch">
            <input class="input_box" type="submit" name="submit" placeholder="Search" value="search">
            <a class="btn" href="#"></a>
         </div>
    </form>
    <div class="box">
        <a href="upload_photo.php"><input type="button" name="" value="Upload Prescription"></a>
    </div>

 <div class="box1" style="margin-top: 30px; text-align: center; font-size: 25px;">
        <a href="suggestion.php"> <button class="button button5">Get Suggestions</button></a>
    </div>


    <div class="container" style="width: 65%">
        <h2>Headache Medicine</h2>
        <?php
            $query = "SELECT * FROM medicine_list WHERE identity = '1' ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4">

                        <form method="post" action="add_to_cart.php?action=add&id=<?php echo $row["id"];?>">
                             
                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <a href="rating.php"><h5 class="text-info"><?php echo $row["pname"]; ?></h5></a>
                              
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                                            
                            </div>
                               
                        </form>
                        <div class="src">
                        <form method="post" action="rating.php?action=rat&id=<?php echo $row["id"];?>"> 
                         
                                       <input type="submit" name="rat" style="margin-top: 5px;" class="btn btn-success"
                                       value="Ratings">
                                       
                                       </form>
                                       </div>                        
                    </div>
                    <?php
                }
            }
        ?>
        
        <h1>Gastric Pain Killer Medicine</h1>
        <?php
            $query = "SELECT * FROM medicine_list WHERE identity = '2' ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4">

                        <form method="post" action="add_to_cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <a href="rating.php"><h5 class="text-info"><?php echo $row["pname"]; ?></h5></a>
                              
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                        </form>
                        <div class="src">
                        <form method="post" action="rating.php?action=rat&id=<?php echo $row["id"];?>"> 
                         
                                       <input type="submit" name="rat" style="margin-top: 5px;" class="btn btn-success"
                                       value="Ratings">
                                       
                                       </form>
                                       </div>
                    </div>
                    <?php
                }
            }
        ?>


        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>
                <?php
                    $sum = 0;
                    $query = "SELECT crt.* FROM cart AS crt JOIN medicine_list AS ml ON crt.prod_id = ml.id ORDER BY ml.identity ASC";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)){
                        $total = $row['quantity'] * $row['price'];
                        $sum += $total;
                        ?>
                            <tr>
                                <td><?= $row['prod_name'] ?></td>
                                <td><?= $row['quantity'] ?></td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $total ?></td>
                                <td><a href="add_to_cart.php?action=delete&id=<?php echo $row["id"]; ?>" >Remove</a></td>
                            </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: </td>
                    <td><?= $sum ?></td>
                </tr>
            </table>
        </div>
        <div class="row text-right">
            <a href="payment.php" class="btn btn-success">Payment</a>        
        </div>            
    </div>
</body>
</html>


<?php
}

else{
	
	header("Location:login_html.php");
	
}

?>
