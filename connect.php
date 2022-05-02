<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','Anushka@108','anu','4306');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $username,  $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		// <a href="login.php">Login</a>
		$stmt->close();
		$conn->close();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<a href="login.php"><b>Login</b></a>
</body>
</html>