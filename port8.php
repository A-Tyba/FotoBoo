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

<?php
//IMPORTING name for review section
$email=$_COOKIE["email"];
//Setting photographer ID
$check_id=8;
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

$email=$_COOKIE["email"];

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
            $bio_fill=htmlspecialchars($reg['bio']);
            $contact_fill=htmlspecialchars($reg['contact_info']);
            break;
            
        }
        else{
            echo "";
        }
    
    }

    


?>
<!DOCTYPE html>
<html>
<head>
<title>PORT8</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-green">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  
  <a href="portfolio.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#biography" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>BIOGRAPHY</p>
  </a>
  <a href="#portfolio" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PORTFOLIO</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="#reviews" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>REVIEWS</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-green w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#biography" class="w3-bar-item w3-button" style="width:25% !important">BIO</a>
    <a href="#portfolio" class="w3-bar-item w3-button" style="width:25% !important">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    <a href="#reviews" class="w3-bar-item w3-button" style="width:25% !important">REVIEWS</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-dark-green" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span><?php echo " ".$name_fill ?></h1>
    <h3 class="w3-padding-16 w3-text-light-grey">Zoo Photographer</h3>
    <img src="images/p8_bw.jpg" alt="boy" class="w3-image" width="400" height="400">
  </header>

    <!-- Stars and Review count -->
    <div class="w3-green w3-padding-large w3-padding-32 w3-margin-top" id="bio">
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

  <!-- Biography Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="biography">
    <h2 class="w3-text-light-grey">My Biography</h2>
    <hr style="width:200px" class="w3-white">
    <p class="w3-green"> <?php echo $bio_fill ?>
    </p>

    
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="portfolio">
    <h2 class="w3-text-light-grey">My Portfolio</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/port8-1.jpg" style="width:100%">
        <img src="images/port8-2.jpg" style="width:100%">
        <img src="images/port8-3.jpg" style="width:100%">
        <img src="images/port8-4.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="images/port8-5.jpg" style="width:100%">
        <img src="images/port8-6.jpg" style="width:100%">
        <img src="images/port8-7.jpg" style="width:100%">
        <img src="images/port8-8.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p class="w3-green"><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
      <i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> <?php echo $contact_fill ?> </p>
    </div><br>

  <!-- End Contact Section -->
  </div>

  <!-- Leave a review -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="reviews">
    <h3 class="w3-center">Leave a review</h3>
    <hr>
    <p>Tell us how you feel about our photographer's service, including what areas to improve upon</p>
    
    <form action="port_conn.php" method="post">
    

    <div class="w3-section">
        <label>Photographer ID</label>
        <input class="w3-input w3-padding-16" type="number" name="photographer_id" id="photographer_id" value="8">
      </div>

      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-padding-16" type="text" required name="name" id="name" value="<?php echo $full_name ?>">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-padding-16" type="text" required name="email" id="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
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
        <label>Message</label>
        <br>
        <textarea  class="w3-input w3-padding-16" rows="10" columns="50" placeholder="Message" id="message" name="message"></textarea>
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Submit</button>
    </form><br>

  



  </div>

    <!-- Reviews -->
    <!-- <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="reviews">
    <h3 class="w3-center">Reviews</h3>
    <hr>
    <p>Tell us how you feel about our photographer's service, including what areas to improve upon</p>
    
    <form action="port_conn.php" method="post">
    

    <div class="w3-section">
        <label>Photographer ID</label>
        <input class="w3-input w3-padding-16" type="number" name="photographer_id" id="photographer_id" value="2">
      </div>

      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-padding-16" type="text" required name="name" id="name" value="<?php echo $full_name ?>">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-padding-16" type="text" required name="email" id="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <br>
        <textarea  class="w3-input w3-padding-16" rows="10" columns="50" placeholder="Message" id="message" name="message"></textarea>
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Submit</button>
    </form><br>

  



  </div> -->

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
$id=8;
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
            $star8=intval(htmlspecialchars($reg['star']));
            $count++;

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

            for ($x = 1; $x <= $star8; $x++) { 
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
  



    


<!-- END PAGE CONTENT -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off" >
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
