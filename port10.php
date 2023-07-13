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





    


?>

<?php

$email=$_COOKIE["email"];
//FETCHING INFO FOR DYNAMIC 

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
$check_id=10;
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
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>PORT10</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  /* color: #777; */
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('../images/port4-6.jpeg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body class="w3-grey">

<!-- Navbar (sit on top) -->
<div class="w3-top" >
  <div class="w3-bar" id="myNavbar" >
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <fieldset >
    <a href="portfolio.php" class="w3-bar-item w3-button">HOME</a>
    <a href="#bio" class="w3-bar-item w3-button w3-hide-small"> BIOGRAPHY</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"> CONTACT</a>
    <a href="#reviews" class="w3-bar-item w3-button w3-hide-small"> REVIEWS</a>
</fieldset>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>
<br>
<br>

<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    
  <div class="w3-display-middle" style="white-space:nowrap;">
  <img class="w3-center" src="images/p10.jpg" alt="Photo of Me" width="500" height="700"><br><br>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">I am <?php echo $name_fill ?></span><br><br>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Still-life Photographer</span>
  </div>
</div>

  <!-- Stars and Review count -->
  <div class="w3-grey w3-padding-large w3-padding-32 w3-margin-top" id="bio">
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

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="bio">
  <h3 class="w3-center"  style="color:black;"><b> BIOGRAPHY </b></h3>
  <fieldset>
  <hr>
    <p  class="w3-center"  style="color:black;"><?php echo $bio_fill?></p>
  
 

</fieldset>
    <br>
</div>







<!-- Container (Portfolio Section) -->

<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center"  style="color:black;" ><b> PORTFOLIO </b></h3>
  <p class="w3-center"><em>Here are some of my latest work<br></em></p><br>

  <div class="w3-black w3-padding-large w3-padding-32 w3-margin-top" id="portfolio">
  
  <img src="images/port10-1.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-2.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-3.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-4.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-5.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-6.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-7.jpg"  class="w3-image" width="1000" height="500">
  <img src="images/port10-8.jpg"  class="w3-image" width="1000" height="500">


  </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center" style="color:black;">CONTACT</h3>
  <!-- <p class="w3-center"><em>I'd love your feedback!</em></p> -->
  <fieldset style="color:black;">
      <p> <?php echo $contact_fill ?> </p>
</fieldset>

</div>


  <!-- Leave a review -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">Leave a review</h3>
    <hr>
    <p>Tell us how you feel about our photographer's service, including what areas to improve upon</p>
    
    <form action="port_conn.php" method="post">
        <fieldset>
    <div class="w3-section">
        <label>Photographer ID</label>
        <input class="w3-input w3-border" type="number" name="photographer_id" id="photographer_id" value="10">
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
</fieldset>
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
    <fieldset class="w3-center">


    <?php
// IMPORTING REVIEWS

// Setting photographer ID
$id=10;
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


</fieldset>
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
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
