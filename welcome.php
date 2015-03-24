<?php
include('lock.php');

// remove php error messages
error_reporting(E_ALL ^ E_DEPRECATED);
//make connection
mysql_connect('localhost', 'root','');

//selecting my db
mysql_select_db('forms1');



$sql="SELECT * FROM file";
$records=mysql_query($sql);

// Count Participants 
$result = mysql_query("SELECT * FROM file");
$num_rows = mysql_num_rows($result);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<body>
	
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	
    <h5>Welcome <?php echo $login_session; ?></h5>
   	<h1>Job Applications</h1>
   	<!-- <title>Cantebury Info</title> -->
	

   	<!-- Bootstrap -->
   	 <link href="css/bootstrap.min.css" rel="stylesheet">
   	 <link href='css/main.css' rel='stylesheet'>
</head>

<body>



<div id="info">
<?php

	echo "<br />There are " . $num_rows . " job applications.";
	
	echo "<br /><br />";

?>
</div>

<table class="table table-bordered table-hover table-striped">

	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone Number</th>
		<tr>
	</thead>
	

<tbody>


<?php
while($file=mysql_fetch_assoc($records)) {
	
	// if($tablev2['gender']=='male') {
 //    	$var_tr = 'success';
	// }
	// elseif($tablev2['gender']=='female') {
 //    	$var_tr = 'danger';
	// }
	
    	// echo "<tr class='$var_tr " . $tablev2['gender'] . "'>";


		echo "<tr>";

    	echo "<td>".$file['id']."</td>";

	    echo "<td>".$file['firstname']."</td>";

	    echo "<td>".$file['lastname']."</td>";

	    echo "<td>".$file['email']."</td>";

	    echo "<td>".$file['phone_number']."</td>";

	    echo "</tr>";
		
	
} //end while
?>
<tbody>


</table>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>