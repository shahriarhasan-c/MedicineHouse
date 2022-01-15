<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "project");

  $result = mysqli_query($db, "SELECT * FROM  uploadedimage");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 200px;
   }
   .logout input[type="button"]
         {  
            text-align: center;
            position: absolute;
            top: 5%;
            left: 1600px;
            transform: translate(-50%,-50%);
            height: 40px;
            width: 80px;
            border-radius: 1px;
            padding: 10px;
            color: orange;
            font-family: sans-serif;
         }
</style>
</head>
<body>
<div class="logout" style="margin-left: : 10px;">
<a href="shopping_cart.php"><input type="button" name="Go To website" value="website"></a>
</div>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='imagesuploadedf/".$row['imagename']."'>";
        echo "<p>".$row['name']."</p>";
        echo "<p>".$row['email']."</p>";
        echo "<p>".$row['contact']."</p>";
      echo "</div>"; ?>


      <form method="POST" action="prescrptionSmsEmail.php" enctype="multipart/form-data">
          <textarea 
            id="" d="text" 
            cols="40" 
            rows="14" 
            name="text" 
            placeholder="Say something about this image..."></textarea>
          <input type="text" placeholder="name" name=name>
          <input type="text" placeholder="Email..." name=email>
          <input type="text" placeholder="Contact Number..." name="contactNumber">  
          <button type="submit" name="submit">Send Email</button>
          <button type="submit" name="submit1">Send Confirmation Email</button>
      </form>

     <?php
    }
  ?>
  
</div>
</body>
</html>