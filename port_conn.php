<?php
	$photographer_id = $_POST['photographer_id'];

    $name = $_POST['name'];
	
	$email = $_POST['email'];
    
    $message = $_POST['message'];

	$star = $_POST['star'];



	

	// Database connection

	$conn = new mysqli('localhost','root','','fotoboo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}


	//making a connection to the database
	else {
		$stmt = $conn->prepare("insert into reviews(name, email, message, photographer_id, star) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $name, $email, $message, $photographer_id, $star);
		$execval = $stmt->execute();

    echo '<html>
		<head>
				<meta http-equiv="refresh" content="0;url=rev_success.html" />
		</head>
		<body>';



		$stmt->close();
		$conn->close();
	}


?>