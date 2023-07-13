
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
        <form class="box" action="register_conn.php" method="post">
            <h1>Register</h1>
            <input type='text'class='input-field'placeholder='First Name' id="firstName" name="firstName"  required>
            <input type='text'class='input-field'placeholder='Last Name' id="lastName" name="lastName" required>
            <input type='email'class='input-field'placeholder='Email ID' id="email" name="email" required>
            <input type='tel'class='input-field'placeholder='Phone Number' id="phone" name="phone" required>
            <input type='password'class='input-field'placeholder='Enter Password' id="pass" name="pass" required>
            <input type='password'class='input-field'placeholder='Confirm Password' id="cpass" name="cpass" required>
            <br> <center> <hr size="2" width="100%" color="lightBlue"></center>
            <br>
            <!-- <input type="checkbox"  value="lsRememberMe" id="rememberMe"> <label <p style="color: rgb(103, 113, 122);" for="rememberMe"> &nbsp; Remember Password </p></label> -->
            <button type='submit'class='submit-btn'>Sign Up</button>
            <center><p style="color: rgb(103, 72, 110);">Already have an Account?</p></center><a href="login.php"><center><button type="button" class="loginbtn">Login</button></center></a>
               
        </form>

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
