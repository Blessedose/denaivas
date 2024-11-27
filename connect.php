<?php
	$firstname = $_POST['firstname'];
	$othernames = $_POST['othernames'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
	$room = $_POST['room'];
	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];


	//database connection
	$conn = new mysqli('localhost','root','','bookingsession');
	if($conn->connect_error){
		die('connection failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into reservation(firstname, othernames, email, number, gender, room, arrival, departure)values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssssi",$firstname, $othernames, $email, $number, $gender, $room, $arrival, $departure);
		$stmt->execute();
		echo "registeration successful";
		$stmt->close();
		$conn->close();
	}
	?>