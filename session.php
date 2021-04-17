<?php
session_start();

if(isset($_SESSION["userid"]) && $_SESSION["userid"] === True){
	header("location: welcome.php");
	exit;
}