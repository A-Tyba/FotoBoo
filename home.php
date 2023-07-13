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
    <section class="header">
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
        <div class= "text-box">
            <h1> Walk, Look, See, Stop, Photograph  </h1>
            <p> To the First Photographer's Website in Bangladesh </p>
            <a href="about.php" style="color:white" class="hero-btn">About Us</a>
        </div>

    </section>


      
      <!--------Fantastic Photo Gallery-------->
    <section class= "details">
        <h1>Fantastic Photo Gallery </h1>
        <p> Satiate your thirst for beauty with our tantalizing photography skills</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/g1.png">     
            </div>
                   
            <div class="facilities-col">
              <img src="images/g2.png">    
            </div>

            <div class="facilities-col">
                <img src="images/g3.png">
            </div>

        </div>  
          
       <div class="row">
            <div class="facilities-col">
              <img src="images/g4.png">
            </div>
                   
            <div class="facilities-col">
                <img src="images/g6.png">
            </div>

            <div class="facilities-col">
              <img src="images/g5.png">
            </div>
        </div>  
    </section>
      
    <!-----------team of Photographers ---------->
      
    <section class="photographers">
      
        <h1> Meet our all-star team of Photographers </h1>
        <p> A glimpse into the foundation of the company</p>
            <div class="row">
                <div class="photographers-col">
                    <img src="images/p1.jpg">
                        <div class="layer">
                            <h3>
<?php

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

    


?></h3>
                    </div>
                </div>
                <div class="photographers-col">
                    <img src="images/p2.jpg">
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

    


?></h3>
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

    


?></h3>
                        </div>
                </div>
            </div>
          
            <div class="row">
                <div class="photographers-col">
                    <img src="images/p4.jpg">
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

    


?></h3>
                        </div>
                </div>
                <div class="photographers-col">
                    <img src="images/p5.jpg">
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
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

    


?></h3>
                        </div>
                </div>
            </div>
          
    </section>
      
      
    <!--------Facilities------->
    <section class="facilities">
        <h1>Our Features</h1>
        <p>You can find a wide range of features some of which include:</p>
          
            <div class="row">
                <div class="facilities-col">
                <img src="images/f1.gif">
                  <h3>Dark-mode</h3>
                  <p>Our website has a dark-mode which is easier on the eyes of the viewer as it switches to a darker theme for the entire website.</p>
                </div>

                <div class="facilities-col">
                <img src="images/f3.gif">
                  <h3>Review System</h3>
                  <p>We are a transparent company that values authenticity and integrity of the photographers.</p>
                </div>
          
                <div class="facilities-col">
                <img src="images/f2.gif">
                  <h3>Highly-trained Photographers</h3>
                  <p>We employ the best of the best in the photography field through a series of strict evaluations.</p>
                </div>

            </div>
    </section>


    <!-------testimonials-------->
    
    <section class="testimonials"> 
        <h1>What Our Visitors Say</h1>
        <p> About the Photographer's Website</p>
        
        <div class="row">
            <div class="testimonial-col">
                <img src="images/r1.jpg">
                <div>
                    <p> It is the greatest photographer's website I have ever seen! There are almost all types of photographers available for hiring. The quality of photography is exceptional. We have access to a wide range of portfolios. So, I am advising you to sign-up on this website to capture the best memories of your loved ones.
                    </p>
                    <h3>Etraat Zereen</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/r2.jpg">
                <div>
                    <p> Overall, the website is quite impressive, well-designed and meticulously organized that will captivate your attention and provide the photographer of your choice. They even have an outstanding honest review system to judge photographers. If you are thinking of hiring someone for your photography needs, look no further!
                    </p>
                    <h3>Saida Iman</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
        </div>
    </section>
      
    
      
      
      
    <!--------Footer------>
    <section class="footer">
        <h4>Follow Us</h4>
        <p> JOIN US FOR EXCITING PHOTOGRAPHERS AND MORE</p>

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
