<?php
	$name = $_POST['name'];
	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];
	$chooseroom = $_POST['chooseroom'];


	$conn = new mysqli('localhost','root','','tests');
	if($conn->connect_error){
		die('connection failed  :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into client(name, arrival, departure, chooseroom)values(?,?,?,?)");
		$stmt->blind_param("ssss",$name, $arrival, $departure, $chooseroom);
		$stmt->execute();
		echo "registration sucessful";
		$stmt->close();
		$conn->close();
	}

?>