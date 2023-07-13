<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
    $subject = $_POST['subject'];
	$message = $_POST['message'];
	$count=1;



	// Database connection

	$conn = new mysqli('localhost','root','','fotoboo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}

	else {
		$stmt = $conn->prepare("insert into contact(name, email, subject, message, count) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $name, $email, $subject, $message, $count);
		$execval = $stmt->execute();
		$stmt = $conn->prepare("insert into hits(count) values(?)");
		$stmt->bind_param("i", $count);
		$execval = $stmt->execute();

		
		echo '<html>
		<head>
				<meta http-equiv="refresh" content="0;url=contact_success.html" />
		</head>
		<body>';



		$stmt->close();
		$conn->close();
	}

	// //connecting to database called fotoboo
	// $conn = mysqli_connect('localhost','root','','fotoboo');
    // if(!$conn){
    //     echo 'Connection error' . mysqli.connect_error();
    // }
    


    // //writing query for email and pass
    // $sql = "SELECT * FROM hits";


    // //making query and getting result
    // $db_email = mysqli_query($conn, $sql);


    // //fetching the resulting rows as array
	// $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);

	// // echo $count= count($registration['count']);
	// echo count($registration);

	// $stmt = $conn->prepare("insert into contact(name, email, subject, message) values(?, ?, ?, ?)");
	// $stmt->bind_param("ssss", $name, $email, $subject, $message);
	// $execval = $stmt->execute();
	// $stmt = $conn->prepare("insert into hits(count) values(?)");
	// $stmt->bind_param("i", $count);
	// $execval = $stmt->execute();


// echo '<html>
// 	<head>
// 			<meta http-equiv="refresh" content="0;url=contact_success.html" />
// 	</head>
// 	<body>';



	// $stmt->close();
	// $conn->close();

	

	// $conn2 = mysqli_connect('localhost','root','','fotoboo');
    // if(!$conn2){
    //     echo 'Connection error' . mysqli.connect_error();
    // }
    


    // //writing query for email and pass
    // $sql = "SELECT * FROM contact";


    // //making query and getting result
    // $result = mysqli_query($conn2, $sql);
    // // $db_pass = mysqli_query($conn, $sql2);

    // //fetching the resulting rows as array
    // $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // // print_r($registration);

    // foreach($contacts as $contact){
    //     echo htmlspecialchars($contact['name']);
	// 	echo htmlspecialchars($contact['email']);
	// 	echo htmlspecialchars($contact['subject']);
	// 	echo htmlspecialchars($contact['message']);
	// }


?>