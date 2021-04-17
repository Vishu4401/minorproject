<?php
session_start();

if(!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true) {
	header("location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome <?php echo $_SESSION["name"]; ?></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Hello, <strong><?php echo $_SESSION["name"];?></strong>. Welcome to Demo site.</h1>
			</div>
			<p>
				<a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-presses = "true">Log Out</a>
			</p>
		</div>
	</div>

</body>
</html>
