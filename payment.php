<?php
    session_start();
    require('./config.php');   
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
    <title>Payment col-md-6</title>
</head>
<body>
    <div class="container">
        <div class="#">
            <form action="save_payment.php" method="POST" class="#">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input  class="form-control" type="text" name="contact">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input  class="form-control" type="text" name="address">
                </div>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>