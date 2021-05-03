<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login and Registration form example</title>
 
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 
	</head>
 
	<body>
		<div id="container">
				<form action="home.php" method="post" id="flogin">
 
					<div class="border-box">
						<h2>Login Form</h2>
						<label for="email" id="un">Username:</label>
						<input type="text" name="user" placeholder="Enter Email Address" id="uname" required><br/>
 
						<label for="password" id="ps">Password:</label>
						<input type="password" name="pass" placeholder="Enter the Password" id="password" required><br/><br>
 
						<button type="submit" value="Login" id="submit">Login</button><br/><br/>
 
						<a href="registration.php">New Member</a>
					</div>
				</form>
		</div>
	</body>
</html>




<?php

if (isset($_SESSION['email']) && $_SESSION['password'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['email'] . "!";
} else {
    echo "Please log in first to see this page.";
}

?>