<?php
	$firstName = $_POST['name'];
	$lastName = $_POST['email'];
	$gender = $_POST['number'];
	$email = $_POST['textarea'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("contact ( name,  email,  number,  textarea,) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $number, $textarea );
		$execval = $stmt->execute();
		echo $execval;
		echo "contact is made successfully...";
		$stmt->close();
		$conn->close();
	}
?>