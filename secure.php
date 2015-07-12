<?php
session_start();
if(isset($_SESSION['expire']))
{
	$now = time(); // Checking the time now when home page starts.
	if ($now > $_SESSION['expire']) {
           unset($_SESSION['rand_code']);
		   unset($_SESSION['expire']);
		   unset($_SESSION['start']);
     }
	
}
?>