<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=1";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars1=round($final_star_avg);
$no_reviews1=$count10;





    


?>



<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=2";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', '');
$how_many_stars2=round($final_star_avg);
$no_reviews2=$count10; 





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=3";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars3=round($final_star_avg);
$no_reviews3=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=4";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars4=round($final_star_avg);
$no_reviews4=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=5";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', '');
$how_many_stars5=round($final_star_avg);
$no_reviews5=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=6";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars6=round($final_star_avg);
$no_reviews6=$count10;





    


?>


<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=7";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars7=round($final_star_avg);
$no_reviews7=$count10;





    


?>


<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=8";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars8=round($final_star_avg);
$no_reviews8=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=9";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars9=round($final_star_avg);
$no_reviews9=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=10";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars10=round($final_star_avg);
$no_reviews10=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=11";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars11=round($final_star_avg);
$no_reviews11=$count10;





    


?>

<?php
// Calculating total reviews and average rating
$star=0;
$count10=0;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
   
    $sql = "SELECT star FROM reviews WHERE photographer_id=12";


    //making query and getting result
    $result = $conn->query($sql);
    

    
    
    //FETCHING STAR FROM REVIEWS
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["star"];
    $star=$star+intval($row["star"]);
    $count10++;
    

  }
} else {
  echo "0 results";
}
$conn->close();


$star_avg=((float)$star)/((float)$count10);
$final_star_avg=number_format((float)$star_avg, 2, '.', ''); 
$how_many_stars12=round($final_star_avg);
$no_reviews12=$count10;





    


?>


<?php
//COUNTING HITS
    $count=1;
	$conn = new mysqli('localhost','root','','fotoboo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}

	else {
		$stmt = $conn->prepare("insert into hits(count) values(?)");
		$stmt->bind_param("i", $count);
		$execval = $stmt->execute();



		$stmt->close();
		$conn->close();
	}
?>

<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">

    <title>FotoBoo</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/2177c9e70d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  </head>
  <body>
    <section class="rub-header">
        <nav>
            <a href="home.php"><img src="images/fotoboo.png"></a>
            <div class="nav-links" id="navLinks"> 
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="registration.php">REGISTER</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                </ul>
            </div>

            <!------- dark Mode Setting ------->
            <div>
                <input type="checkbox"
                class="checkbox" id="checkbox">
                <label for="checkbox"
                class="label">
                <i class="fas fa-moon "></i>
                <i class="fas fa-sun "></i>
                <div class="ball"></div>
            </label>
                </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        
    </section>

    
            



                 <!-----------team of Photographers ---------->
      
    <section class="photographers">
      
      <h1> Meet our all-star team of Photographers </h1>
      <p> A glimpse into the foundation of the company</p>
          <div class="row">
              <div class="photographers-col">
                  
                      <div class="layer">
                          
                          <h3><?php

//Setting photographer ID
$check_id=1;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars1; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews1.")";
    
   
    ?>


    


</h3>
                          <form action="port1.php">
<input type="image" src="images/p1.jpg" alt="Submit"  width = 419 height= 658>
</form>
                  </div>
              </div>

              <div class="photographers-col">
                  
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=2;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars2; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews2.")";
    
   
    ?></h3>
                          <form action="port2.php">
<input type="image" src="images/p2.jpg" alt="Submit"  width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
                  <img src="images/p3.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=3;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars3; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews3.")";
    
   
    ?></h3>
                          <form action="port3.php">
<input type="image" src="images/p3.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
          </div>
        
          <div class="row">
              <div class="photographers-col">
                  
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=4;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 
    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars4; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews4.")";
    
   
    ?></h3>
                          <form action="port4.php">
<input type="image" src="images/p4.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
                  
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=5;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars5; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews5.")";
    
   
    ?></h3>
                          <form action="port5.php">
<input type="image" src="images/p5.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
              <img src="images/p6.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=6;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars6; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews6.")";
    
   
    ?></h3>
                          <form action="port6.php">
<input type="image" src="images/p6.jpg" alt="Submit" width = 419 height= 658>
</form>
                          
                          
                      </div>
              </div>
          </div>

          <div class="row">
              <div class="photographers-col">
                  <img src="images/p7.jpg">
                      <div class="layer">
                      <h3><?php

//Setting photographer ID
$check_id=7;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars7; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews7.")";


    


?></h3>
                      <form action="port7.php">
<input type="image" src="images/p7.jpg" alt="Submit" width = 419 height= 658>
</form>
                  </div>
              </div>
              <div class="photographers-col">
                  <img src="images/p8.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=8;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars8; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews8.")";


    


?></h3>
                          <form action="port8.php">
<input type="image" src="images/p8.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
                  <img src="images/p9.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=9;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars9; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews9.")";

    


?></h3>
                          <form action="port9.php">
<input type="image" src="images/p9.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
          </div>
      
          <div class="row">
              <div class="photographers-col">
                  <img src="images/p10.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=10;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars10; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews10.")";

    


?></h3>
                          <form action="port10.php">
<input type="image" src="images/p10.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
                  <img src="images/p11.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=11;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars11; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews11.")";

    


?></h3>
                          <form action="port11.php">
<input type="image" src="images/p11.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
              <div class="photographers-col">
                  <img src="images/p12.jpg">
                      <div class="layer">
                          <h3><?php

//Setting photographer ID
$check_id=12;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        // $check_name = htmlspecialchars($reg['fname']);
        $check_int = intval(htmlspecialchars($reg['ID']));
 
        if($check_int==$check_id){
            $name_fill=htmlspecialchars($reg['fname']);

            break;
            
        }
        else{
            echo "";
        }
    
    } 

    echo $name_fill;
    echo "<br>";
    for($i=1; $i<=$how_many_stars12; $i++){
        echo "&#9734";
    }
    echo "<br>";
    echo "(".$no_reviews12.")";

    


?></h3>
                          <form action="port12.php">
<input type="image" src="images/p12.jpg" alt="Submit" width = 419 height= 658>
</form>
                      </div>
              </div>
          </div>
        
  </section>
    
    

    

<!-- photographer section ends -->


    <!--------Footer------>
    <section class="footer">
        <h4>Follow Us</h4>
        <p>JOIN US FOR EXCITING PHOTOGRAPHERS AND MORE</p>
    
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-youtube"></i>
            </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Group 5 </p>
    </section>

    <!--------JavaScript for Toggle Menu-------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
        const checkbox =
    document.getElementById('checkbox');
    checkbox.addEventListener('change',  () => {
        
        document.body.classList.toggle('dark');

    });
    </script>

  </body>
</html>

          

         


         
   