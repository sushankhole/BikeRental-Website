<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$myDate = $_POST['myDate'];
	$mylDate = $_POST['mylDate'];
	$city = $_POST['city'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','bform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into regist(firstName, lastName,email,number,myDate,mylDate,city) values(?, ?, ?, ?,?,?,?)");
		$stmt->bind_param("sssiiis", $firstName, $lastName,$email,$number,$myDate,$mylDate,$city);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>