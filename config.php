<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'Worksheet');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);


if($db === false){
	die("Error: Connection error." . mysqli_connect_error());
}
?>



