
<!DOCTYPE html>
<html>
<head>
	<title>Comment Box Create</title>
</head>
<body>
<form accept="comment.php" method="POST">
	Your Name:<input type="text" name="name" placeholder="required" class="x1"><br><br>
	Enter Comment:<textarea name="comment" cols="50" rows="2" class="x2"></textarea ><br><br><br><br><br><br>
	<input type="submit" name="submit" value="Comment" class="x3">
</form>
</body>
</html>
<?php
        $database_name = "project";
        $con = mysqli_connect("localhost","root","",$database_name);
        if (isset($_POST['submit'])) {
        	
        	 $name = $_POST['name'];
        	 $comment =$_POST['comment'];
        	 $query = "INSERT INTO comment_box ( name, comment) VALUES ('$name', '$comment')";
        	 header("location:comment.php");
        	 $result =mysqli_query($con,$query);
        	 if ($result) {
        	 	
        	 	echo "Your Comment Saved";
        	 	header("location:comment.php");
        	 }
        	 else
        	 {
        	 	echo "please try agian";
        	 	header("location:comment.php");
        	 }
        }
?>

<?php
    require('./config.php');
   ?> <h1>List of Reviews ..</h1>
<ul>
<?php
      $query = "SELECT * FROM comment_box";
     $result = mysqli_query($con,$query);
     if(mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
             ?>  
             <div class="testimonial-box">
             <div class="ratings-icons">               
                             </div>
                             <h4>Name: <?php echo $row["name"]; ?></h4>
                        		Comment: <?php echo $row["comment"]; ?>									 							
                             
                         </div>					
                     <?php
                     
                 }

                 
             }
             
           
        
        ?>
</ul>



<style type="text/css">
	.x1
	{
		position: absolute;
      
         left: 6.5%;
         height: 30px;
	}
	.x2
	{     position: absolute;
      
          height: 100px;

	}
	.x3
	{
		 position: absolute;
      
          left: 10%;
          height: 40px;
          width: 160px;
	}

	.testimonial-box img {
    display: inline-block;
    width: 90px;
    height:90px;
    border-radius: 50%;
    margin: 100 0 15px;
}
.testimonial-box h4 {
    color: #fe4819;
}
.testimonial-box p {
    margin-bottom: 20px;
    font-size: 17px;
    font-style: italic;
    font-weight: 400;
}
.ratings-icons {
    color: #fec42d;
    margin-bottom: 15px;
}
h1{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
            margin-top: 5%;
        }
</style>