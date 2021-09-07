<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	header("Location: index_mayo.php");
} else {
	header("Location: index_mayo.php");
}
?>

// this is required to log a user out of their a/c.
