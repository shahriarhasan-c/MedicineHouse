<!DOCTYPE html>
<html>
<head>
	<title>See Appointments</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <h1 class="heading">Feedback</h1>

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
<body style="padding-top: 100px; padding-right: 250px;">
    
<?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $query = "SELECT * FROM appointment ";
       $check= mysqli_query( $con , $query);
?>
<div class="container">
	<table class="table table-condensed table-bordered">
	    <tr class="th">
			<th>Appointment ID</th>
			<th>Patient Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Other Disease</th>
			<th>Problem Description</th>
			<th>Feedback</th>
			<th>Update</th>
        </tr>
		<?php
	                    while ($row = mysqli_fetch_array($check)) {
                            extract($row);
                            
                            echo "<tr class = full><form action=update_feedback.php method = post>";
                            echo "<td><input class= t type=text name=id value=$id></td>";
                            echo "<td><input class= t type=text name=patient_name value=$patient_name></td>";
                            echo "<td><input class= t type=text name=age value=$age></td>";
                            echo "<td><input class= t type=text name=email value=$email></td>";
                            echo "<td><input class= t type=text name=other_disease value=$other_disease></td>";
                            echo "<td><input class= t type=text name=problem_description value=$problem_description></td>";
                            echo "<td><input class= t type=text name=feedback value=$feedback></td>";
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
