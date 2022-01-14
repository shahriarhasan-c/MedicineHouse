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
<!DOCTYPE html>
<html>
<head>
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
	<title>Comment Box Create</title>
</head>
<body>
<form accept="comment.php" method="POST">
	Your Name:<input type="text" name="name" placeholder="required" class="x1"><br><br>
	Enter Comment:<textarea name="comment" cols="50" rows="2" class="x2"></textarea ><br><br><br><br><br><br>
	<input type="submit" name="submit" value="Comment" class="x3">
</form>

<h1>List of Reviews ..</h1>
<table id="cmt">
    <tr>
        <th>Name</th>
        <th>Comment</th>
    </tr>
</table>
        <script>
        let i = 0;
        idk = document.getElementById('cmt')
        
        
        fetch('http://localhost/Software_lab/MedicineHouse/comment_back.php?')
            .then(response => response.json())
            .then(json => {

                while (i < json['content'].length) {
                    let x = idk.insertRow(i+1)
                    x.insertCell().innerHTML = json['content'][i]['name'];
                    x.insertCell().innerHTML = json['content'][i]['comment'];
                    
                    i++;
                }
               
            })
    </script>
</body>
</html>









