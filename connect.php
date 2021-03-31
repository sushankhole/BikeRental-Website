<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	// Database connection
	$conn = new mysqli('localhost','root','','conform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName,email,number,message) values(?, ?, ?, ?,
			?)");
		$stmt->bind_param("sssis", $firstName, $lastName,$email,$number,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>