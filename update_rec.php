<!DOCTYPE html>
<html>
<head>
	<title>update records</title>
	
    
        <style type="text/css">
           
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
	<table >
	    <tr class="th">
			<th>Serial Number</th>
			<th>Medicine Name</th>
			<th>Medicine Image</th>
			<th>Medicine Price</th>
			<th>Update it</th>
        </tr>
		<?php
	                    while ($row = mysqli_fetch_array($check)) {
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
