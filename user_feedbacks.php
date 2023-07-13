

<!DOCTYPE html>
<html>
<head>
<title>Feedbacks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}
</style>
</head>
<body class="w3-content w3-black" style="max-width:1500px;">

<!-- Header with Slideshow -->
<header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="images/uf-1.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Fotoboo User Feedbacks</h1>
        <hr class="w3-opacity">
        <p>Scroll down to view</p>
        
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="/w3images/app2.jpg" alt="Image 2" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge w3-text-red"><b>CLICK!</b> Fast and Easy</h1>
        <hr class="w3-opacity">
        <p>Choose from thousands of features</p>
        <p><button class="w3-button w3-block w3-red w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="/w3images/app4.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Smart Design</h1>
        <hr class="w3-opacity">
        <p>Customize photos as you go</p>
        <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
      </div>
    </div>
  </div>

</header>



<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">DOWNLOAD</h2>
      <p>Download the app in AppStore, Google Play or Microsoft Store.</p>
      <i class="fa fa-android w3-large"></i> <i class="fa fa-apple w3-large"></i> <i class="fa fa-windows w3-large"></i>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Fake Download</button>
    </div>
  </div>
</div>



<!-- Features Section -->
<div class="w3-container w3-padding-64 w3-dark-grey w3-center">
  <h1 class="w3-jumbo"><b>Feedbacks</b></h1>
  

  <div class="w3-row" style="margin-top:64px">

  <?php

//FETCHING FROM DATABASE
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }

    //writing query for fetching everything from database
    $sql = "SELECT * FROM contact";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);
    
    //FETCHING NAME, BIO & CONTACT FROM PORTFOLIO
    foreach($registration as $reg){

        //echo '<input type="text" name="name1" value="'.$namerev_fill.'">';
 
        
            $name_fill=htmlspecialchars($reg['name']);
            $email_fill=htmlspecialchars($reg['email']);
            $subject_fill=htmlspecialchars($reg['subject']);
            $message_fill=htmlspecialchars($reg['message']);

            echo '<hr>';

            echo "Name: \r\n";

            echo '<br>';

            echo '<br>';

            echo '<td><b>'.$name_fill.'</b></td>';

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo "Email: \r\n";

            echo "<br>";

            echo "<br>";

            echo '<td><b>'.$email_fill.'</b></td>';

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo "Subject: \r\n";

            echo '<br>';

            echo '<br>';

            echo '<td><b>'.$subject_fill.'</b></td>';

            echo '<br>';

            echo "<br>";

            echo "\r\n";

            echo "Message: \r\n";

            echo "<br>";

            echo "<br>";

            echo '<td><b>'.$message_fill.'</b></td>';

            echo "<br>";

            echo "<br>";

            echo "<br>";

            echo "<br>";

            echo "\r\n";

            echo '<hr>';

    }

?>
    
      
      

      


    
   
  </div>
  

</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
  <div class="w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">Team Fotoboo</a></p>
</footer>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
