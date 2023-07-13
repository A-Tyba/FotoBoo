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





    


?>

<?php

$email=$_COOKIE["email"];

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
            $bio_fill=htmlspecialchars($reg['bio']);
            $contact_fill=htmlspecialchars($reg['contact_info']);
            break;
            
        }
        else{
            echo "ERROR1";
        }
    
    }

    


?>

<?php
//IMPORTING name for review section

//Setting photographer ID
$check_id=9;
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
<title>PORT3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body style="background-color:#EFC050;">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="portfolio.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BIOGRAPHY</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PORTFOLIO</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
      <a href="#reviews" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REVIEWS</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:500px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="images/p9.jpg" height=700 style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><?php echo $name_fill ?></h3>
      <p><b>Birthday Photographer</b></p>   
    </div>
  </div>
  
  </div>

  <!-- <div class="mySlides w3-display-container w3-center">
    <img src="images/port3-9.jpg" width=700 height=700 style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Miami</h3>
      <p><b>Enjoying music with friends on the sun-baked beach is something else </b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/port3-10.jpg" width=700 height=700 style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York City</h3>
      <p><b>Having lunch at the commercial and cultural hub of the world is beyond comprehension </b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/port3-8.jpg" width=700 height=700 style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Bahamas</h3>
      <p><b>Driving along the golden tracks of the Bahamas' seashore is an otherworldly experience </b></p>    
    </div>
  </div> -->

    <!-- Stars and Review count -->
    <div class="w3-rose w3-padding-large w3-padding-32 w3-margin-top" id="bio">
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


  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">BIOGRAPHY</h2>

    <hr style="color:black;">
    <fieldset style="color:black;">
    <p class="w3-opacity"><i>My thoughts</i></p>
    <p class="w3-justify"><?php echo $bio_fill?></p>
</fieldset>
    <div class="w3-row w3-padding-32">
      
 
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-orange" id="tour">
    <div class="w3-container w3-content w3-padding">
      <h2 class="w3-wide w3-center">PORTFOLIO</h2>
      <p class="w3-opacity w3-center"><i>My life's work</i></p><br>

      <!-- <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul> -->

      

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">

        
          <img width="720" height="480" src="images/port9-1.jpg" alt="New York"  class="w3-hover-opacity">
          <img height="700" src="images/port9-2.jpg" alt="New York"  class="w3-hover-opacity">
          <img width="720" height="480" src="images/port9-3.jpg" alt="New York"  class="w3-hover-opacity">
          <img  height="600" src="images/port9-4.jpg" alt="New York"  class="w3-hover-opacity">
          <img  height="600" src="images/port9-6.jpg" alt="New York"  class="w3-hover-opacity">
          <img width="720" height="480" src="images/port9-7.jpg" alt="New York"  class="w3-hover-opacity">
          <img width="720" height="480" src="images/port9-8.jpg" alt="New York"  class="w3-hover-opacity">
          <!-- <img width="720" height="480" src="images/port3-8.jpg" alt="New York"  class="w3-hover-opacity"> -->
          <!-- <img width="720" height="480" src="images/port3-9.jpg" alt="New York"  class="w3-hover-opacity">
          <img width="720" height="480" src="images/port3-10.jpg" alt="New York"  class="w3-hover-opacity"> -->
          
          
            
          </div>
          </div>
      

       
       

</div>
</div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>

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
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->



<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

 <!-- Leave a review -->
 <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" width=800 id="contact">
    <h3 class="w3-center">Leave a review</h3>
    <hr>
    <p>Tell us how you feel about our photographer's service, including what areas to improve upon</p>
    
    <form action="port_conn.php" method="post">
    

    <div class="w3-section">
        <label>Photographer ID</label>
        <input class="w3-input w3-border" type="number" name="photographer_id" id="photographer_id" value="9">
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
    <fieldset class="w3-center">


    <?php
// IMPORTING REVIEWS

// Setting photographer ID
$id=9;
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



  </div>






  </fieldset>
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


