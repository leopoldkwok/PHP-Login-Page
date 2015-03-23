<!-- SignOut Destroy the session value. -->

<?php
session_start();
	if(session_destroy())
		{
			header("Location: login.php");
		}
?>