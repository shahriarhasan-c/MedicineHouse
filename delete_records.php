<!DOCTYPE html>
<html>
<head>
	<title>Delete Records</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="delete_records_css.css">

</head>
<body style="padding-top: 100px;">
<div class="container">
	<?php
	    if (isset($_POST['submit'])) {
	    	$del = $_POST['checkbox'];

	    	//check if the record is exit to delete or not
            $con = mysqli_connect("localhost", "root", "", "project");
	    	$query1 = "SELECT * FROM medicine_list WHERE id = '$del' ";
	    	$check= mysqli_query( $con , $query1);
	    	if (mysqli_num_rows($check)>0) {
	    		
	    		//means record found and delete it
	    		$delete =  "DELETE FROM medicine_list WHERE id = '$del' ";
	    		$check1= mysqli_query( $con , $delete); ?>

	    		<div class="alert alert-success">
	    			<p>Record deleted!</p>
	    		</div>
	          <?php 
	          header('location:delete_records.php');
	    	}
	    	else
	    	{
	    		//record does not exit so alert
	    		?>
	    		<div class="alert alert-warning">
	    			<p>record does not exit</p>
	    		</div>
	    	<?php }
	    }
	?>
	<table class="table table-condensed table-bordered">
		<tr class="th">
			<th>Serial Number</th>
			<th>Medicine Name</th>
			<th>Medicine Image</th>
			<th>Medicine Price</th>
			<th>Select it</th>
			<th>Delete it</th>
			<?php 
	                 $con = mysqli_connect("localhost", "root", "", "project");
	                 $query = "SELECT * FROM medicine_list ";
	                 $query_check= mysqli_query( $con , $query);
	                 while ($row = mysqli_fetch_array($query_check)) {?>
	                 	<tr class="th1">
	                 		<form method="POST" role="form">
	                 			<td><?php echo $row['id'] ?></td>
	                 			<td><?php echo $row['pname'] ?></td>
	                 			<td><?php echo $row['image'] ?></td>
	                 			<td><?php echo $row['price'] ?></td>
	                 			<td class="th2">
	                 				<input type="checkbox" name="checkbox" value="<?php echo $row['id'];?>" required>
	                 			</td>
	                 			<td>
	                 				<input type="submit" name="submit" class="btn btn-info">
	                 			</td>
	                 		</form>
	                 	</tr>
	        
	                <?php }?>
		</tr>
	</table>
	<form method="POST" style="top: 20px;">
		<input type="submit" name="back" value="Back to page" class="btn btn-info">
	</form>
	<?php
	    $con = mysqli_connect("localhost", "root", "", "project");
	     if (isset($_POST['back']))
	     {   
	     	echo "

          				    <script>

                            
                                  window.location.href='admin_page.php';

          				    </script>

          				";

	     }

	?>
</div>
</body>
</html>