<!-- Contains PHP and HTML code. -->

<?php
include("config.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form
		$myusername=mysqli_real_escape_string($db, $_POST['username']);
		$mypassword=mysqli_real_escape_string($db, $_POST['password']);

		$sql="SELECT id FROM admin WHERE username='$myusername' AND passcode='$mypassword'";
		$result=mysqli_query($db, $sql);
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$active=$row['active']; //
		$count=mysqli_num_rows($result);

		// If result matched $myusername and $mypassword, table row must be 1 row

	if($count==1) {
		// session_register("myusername"); //
		$_SESSION['login_user']=$myusername;

		header("location: welcome.php");
		}
	
	else
		{
			// $error="Your Login Name or Password is invalid";

			echo "Your login name or Password is invalid";
		}
	}
?>

<form action="" method="post">
	<label>UserName :</label>
	<input type="text" name="username"/><br />
	<label> Password :</label>
	<input type="password" name="password"/><br />
	<input type="submit" value=" Submit "/><br />
</form>