<?php

    $flag = false;
    $flag2 = false;
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    //saving email and pass in cookies if checkbox is ticked
    if(!empty($_POST['check_box'])) {
        setcookie ("email",$_POST["email"],time()+ 3600);
        setcookie ("pass",$_POST["pass"],time()+ 3600);
        echo "Cookies Set Successfuly";
    } else {
        setcookie("email","");
        setcookie("pass","");
        echo "Cookies Not Set";
    }

        //connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM admin_login";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);
    // $db_pass = mysqli_query($conn, $sql2);

    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    // print_r($registration);

    foreach($registration as $reg){
        $check_email = htmlspecialchars($reg['email']);
        $check_pass = htmlspecialchars($reg['pass']);
        if($check_email==$email&&$check_pass==$pass){
            $flag=true;
            $flag2=true;
        }
    }


    if($flag == true){
        if($flag2== true){
            echo '<html>
            <head>
                    <meta http-equiv="refresh" content="0;url=admin_success.html" />
            </head>
            <body>';

        }
        else{
            echo '<html>
            <head>
                    <meta http-equiv="refresh" content="0;url=login_fail.html" />
            </head>
            <body>';
        }
    }
    else{
        echo '<html>
        <head>
                <meta http-equiv="refresh" content="0;url=login_fail.html" />
        </head>
        <body>';
    }



?>