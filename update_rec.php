<!DOCTYPE html>
<html>
<head>
	<title>update records</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <h2 class="heading">Update Medicine</h2>

    
        <style type="text/css">
            body {
                background-image: url("a.jpg");
            }
            .heading{
            	color: Orange;
            	padding-bottom: 35px;
            	text-align: center;

            }
			.th
			{   
				color: orange;
			}
			.t
			{
				outline: none;
				border: none;
			    background-color: inherit;
			    color: white;
			}
		</style>
    
</head>
<body style="padding-top: 100px;">
    
<?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $query = "SELECT * FROM medicine_list ";
       $check= mysqli_query( $con , $query);
?>
<div class="container">
	<table class="table table-condensed table-bordered">
	    <tr class="th">
			<th>Serial Number</th>
			<th>Medicine Name</th>
			<th>Medicine Image</th>
			<th>Medicine Price</th>
			<th>Update it</th>
        </tr>
		<?php
	                    while ($row = mysqli_fetch_array($check))
	                    {
                            extract($row);
                            
                            echo "<tr class = full><form action=update_re.php method = post>";
                            echo "<td><input class= t type=text name=id value=$id></td>";
                            echo "<td><input class= t type=text name=pname value=$pname></td>";
                            echo "<td><input class= t type=text name=image value=$image></td>";
                            echo "<td><input class= t type=text name=price value=$price></td>";
                            echo "<td><input type=submit calss = to></td>";
                            echo "</form></tr>";
	                    }
		?>
		
</table>
	<form method="POST" style="top: 20px;">
		<input type="submit" name="back" value="Back to previous page" class="btn btn-info">
	</form>
	<?php
	   
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