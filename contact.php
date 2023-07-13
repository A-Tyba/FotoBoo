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

//Setting photographer ID
$email=$_COOKIE["email"];
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
    <section class="tub-header">
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
        <h1>Contact Us</h1>
    </section>

   

    <!--------contact us------->
      
    <section class="location">
      
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.458471474156!2d90.56729791429872!3d23.83784829134846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755cb76f07e8e59%3A0x6bf1338717a3f6e5!2sPurbachal%20View%20Rd!5e0!3m2!1sen!2sbd!4v1629913667612!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         
         </section>
         
         <section class="contact-us">
             
             <div class="row">
                 <div class="contact-col">
                     <div>
                         <i class="fa fa-home"></i>
                         
                             <h5>LAKE DRIVE AVENUE, PURBACHAL VIEW ROAD, <br> NARAYANGANJ DISTRICT, DHAKA</h5>
                             
                         
                     </div>
                     <div>
                         <i class="fa fa-phone"></i>
                      
                             <h5>+88 02 9002738 <br>  AVAILABLE: <br> SATURDAY TO THURSDAY. 9AM TO 6PM</h5>
                             
                         
                     </div>
                     <div>
                         <i class="fa fa-envelope"></i>
                         
                             <h5>fotoboo_support@fotoboo.co <br> SEND US AN EMAIL IF YOU HAVE ANY QUERIES</h5>
                             
                        
                     </div>
                 </div>
                <div class="contact-col">

                 <form action="contact_conn.php" method="post">
                     
                     <input type="text" placeholder="Enter your name" id="name" name="name" value="<?php echo $full_name ?>" required>
                     <input type="email" placeholder="Enter your email address" id="email" name="email" value="<?php echo $email ?>" required>
                     <input type="text" placeholder="Enter the subject" id="subject" name="subject"  required>
                     <textarea rows="8" placeholder="Message" id="message" name="message"  required></textarea>
                     <button type="submit" class="hero-btn red-btn">Send Message</button>
                     </form>
                 
                 </div> 
             
             </div>
         </section>

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