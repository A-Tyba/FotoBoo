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





    


?>

<?php

$email=$_COOKIE["email"];

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
            $bio_fill=htmlspecialchars($reg['bio']);
            $contact_fill=htmlspecialchars($reg['contact_info']);
            break;
            
        }
        else{
            echo "";
        }
    
    }

    


?>

<?php
//IMPORTING name for review section

//Setting photographer ID
$check_id=11;
//FETCHING NAME FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM registration";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){
        $check_email = htmlspecialchars($reg['email']);

 
        if($check_email==$email){
            $namef_fill=htmlspecialchars($reg['firstName']);
            $namel_fill=htmlspecialchars($reg['lastName']);
            $full_name=$namef_fill." ".$namel_fill;

            break;
            
        }
        else{
            echo "";
        }
    
    }

    


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
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>PORT11</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>
<body  style="background-color:lightgreen;">

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px" style="color:#000000">
  <img class="w3-image" src="images/p11.jpg" alt="Me" width="475" height="200" style="color:#000000">
  <div  class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center" style="color:#000000">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge" style="color:#FFFFFF"><?php echo $name_fill ?></h1>
    <h5 class="w3-hide-large" style="white-space:nowrap" style="color:#FFFFFF"><?php echo $name_fill ?></h5>
    <h3 class="w3-hide-medium w3-hide-small" style="color:#FFFFFF">FOOD PHOTOGRAPHER</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-green w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="portfolio.php" class="w3-bar-item w3-button">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button">Biography</a>
    <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#reviews" class="w3-bar-item w3-button">Reviews</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Biography</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
  <a href="#reviews" class="w3-bar-item w3-button">Reviews</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

  <!-- Stars and Review count -->
  <div class="w3-light-green w3-padding-large w3-padding-32 w3-margin-top" id="bio">
    <h3 class="w3-center">Ratings Preview</h3>
    <hr>
    <fieldset class="w3-center"> <?php echo "Average rating: ".$final_star_avg?>
    <?php $how_many_stars=round($final_star_avg);
    //for ($x = 0; $x <= 10; $x++) {
    for($i=1; $i<=$how_many_stars; $i++){
      echo "&#11088;";
    }

    ?>
    <br> 
    <?php echo "Total reviews: ".$count10?></fieldset>
   

  </div>

  <!-- Biography -->
  <div class="w3-green w3-padding-large w3-padding-32 w3-margin-top" id="bio">
    <h3 class="w3-center" style="color:white">Biography</h3>
    <hr>
    <p><?php echo $bio_fill?></p>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        

      </div>
      <div class="w3-section">


      </div>
      <div class="w3-section">
      

      </div>

    </form><br>


  </div>

  <!-- Images (Portfolio) -->
  
  <div class="w3-light-green w3-padding-large w3-padding-32 w3-margin-top" id="portfolio">
  <h3 class="w3-center">Portfolio</h3>
  <hr>
  <img src="images/port11-1.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-2.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-3.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-4.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-5.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-6.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-7.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-8.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/port11-9.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
  </div>

    <!-- Contact -->
    <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="reviews">
    <h3 class="w3-center">Contact</h3>
    <hr>
    <p>You can contact our photographer either by email or by direct calls </p>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
      <p class="w3-input w3-border">
    <?php echo $contact_fill ?>
</p>

      </div>

    </form><br>

    


  </div>

<!-- End page content -->

<!-- End page content -->

  <!-- Leave a review -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">Leave a review</h3>
    <hr>
    <p>Tell us how you feel about our photographer's service, including what areas to improve upon</p>
    
    <form action="port_conn.php" method="post">
    

    <div class="w3-section">
        <label>Photographer ID</label>
        <input class="w3-input w3-border" type="number" name="photographer_id" id="photographer_id" value="11">
      </div>

      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" required name="name" id="name" value="<?php echo $full_name ?>">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" required name="email" id="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
      </div>
      <div class="w3-section">
        <label>Rating</label>
        <br>
        <input type="radio" id="star" name="star" value="5">
        <label for="html">&#11088; &#11088; &#11088; &#11088; &#11088;</label><br>
         <input type="radio" id="star" name="star" value="4">
         <label for="css">&#11088; &#11088; &#11088; &#11088;</label><br>
         <input type="radio" id="star" name="star" value="3">
         <label for="javascript">&#11088; &#11088; &#11088;</label><br>
         <input type="radio" id="star" name="star" value="2">
         <label for="javascript">&#11088; &#11088;</label><br>
         <input type="radio" id="star" name="star" value="1">
         <label for="javascript">&#11088;</label>

      </div>


      <div class="w3-section">
        
      
        <br>
        <textarea  class="w3-input w3-border" rows="10" columns="50" placeholder="Message" id="message" name="message"></textarea>
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Submit</button>


    </form><br>

  



  </div>



  <!-- Reviews -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="reviews">
    <h3 class="w3-center">Reviews</h3>
    <hr>
    <p>This is what our previous customers had to say about the photographer:</p>
    <br>
    <br>
    <br>
    <br>


    <?php
// IMPORTING REVIEWS

// Setting photographer ID
$id=11;
$count=0;
// FETCHING NAME FROM DATABASE
// connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for fetching everything from database
    $sql = "SELECT * FROM reviews";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach(array_reverse($registration) as $reg){
      //$int_value = intval( $string );
        $check_id = intval(htmlspecialchars($reg['photographer_id']));

 
        if($check_id==$id && $count!=10){
            $namerev_fill=htmlspecialchars($reg['name']);
            $review=htmlspecialchars($reg['message']);
            $star = intval($reg['star']);


            //echo '<input type="text" name="name1" value="'.$var.'">';


            echo '<hr>';

            echo "Name: \r\n";

            echo '<br>';

            echo '<br>';

            echo '<td><b>'.$namerev_fill.'</b></td>';

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo "Rating: \r\n";

            echo '<br>';

            echo '<br>';

            for ($x = 1; $x <= $star; $x++) { 
              echo "&#11088;";
            }

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo "Review: \r\n";

            echo "<br>";

            echo "<br>";

            echo '<td><b>'.$review.'</b></td>';

            echo "<br>";

            echo "<br>";

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo '<hr>';





            

           
            
        }
        else{
            echo "";
        }
    
    }

    


?>



  </div>







</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#" class="w3-button w3-light-grey"> <i class="fa fa-arrow-circle-up" style="font-size:36px"></i> To the top</a>

  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

  <p> POWERED BY TEAM FOTOBOO </p>
  
</footer>

</body>
</html>