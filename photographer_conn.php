<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name_key=$_POST["name"];

$name_key2=$_POST["cname"];

$bio_key=$_POST["bio"];

$contact_key=$_POST["contact"];


$conn = new mysqli('localhost','root','','fotoboo');


$sql = "SELECT * FROM portfolio WHERE 'fname' = ?";
if($query = $conn->prepare($sql)) { // assuming $mysqli is the connection
    $query->bind_param('s', $name_key);
    $query->execute();
    $query->close();

    //setting new name
    $query1 = $conn->prepare("UPDATE portfolio SET fname=? WHERE fname=?");
    $query1->bind_param('ss', $name_key2, $name_key); 
    $query1->execute();
    $query1->close();

    //setting new bio
    $query2 = $conn->prepare("UPDATE portfolio SET bio=? WHERE fname=?");
    $query2->bind_param('ss', $bio_key, $name_key); 
    $query2->execute();
    $query2->close();

    //setting new contact info
    $query3 = $conn->prepare("UPDATE portfolio SET contact_info=? WHERE fname=?");
    $query3->bind_param('ss', $contact_key, $name_key); 
    $query3->execute();
    $query3->close();
    // any additional code you need would go here.
} else {
    $error = $mysqli->errno . ' ' . $mysqli->error;
    echo $error; // 1054 Unknown column 'foo' in 'field list'
}

echo '<html>
            <head>
                    <meta http-equiv="refresh" content="0;url=edit_success.html" />
            </head>
            <body>';






?>