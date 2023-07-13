<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];



	

	// Database connection

	$conn = new mysqli('localhost','root','','fotoboo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}

	//Checking whether the password and re-entered passwords match or not
	else if($pass!=$cpass){
		echo '<html>
		<head>
				<meta http-equiv="refresh" content="0;url=reg_fail.html" />
		</head>
		<body>';

	}
	//making a connection to the database
	else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, phone, pass, cpass) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $pass, $cpass);
		$execval = $stmt->execute();

    echo '<html>
		<head>
				<meta http-equiv="refresh" content="0;url=reg_success.html" />
		</head>
		<body>';



		$stmt->close();
		$conn->close();
	}


?>