<?php

//-----------------------------------------------FETCHING---------------------------------------------------------------------------------
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM hits";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
	$registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);

	// echo $count= count($registration['count']);
	echo count($registration);

//-----------------------------------------------INSERTING---------------------------------------------------------------------------------
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
		echo $execval;

    echo '<html>
		<head>
				<meta http-equiv="refresh" content="0;url=reg_success.html" />
		</head>
		<body>';



		$stmt->close();
		$conn->close();
	}




?>