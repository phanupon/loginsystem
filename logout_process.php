<?php
	session_start(); //start session
	session_destroy(); //destroy session
	header("location:index.php"); //กลับไปหน้า login
?>