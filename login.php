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
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="visitor()">VISITOR</button>
                    <button type="button" class="toggle-btn" onclick="admin()">ADMIN</button>
                </div>

            <form  id="visitor" class="input-group" action="login_conn.php" method="post">


                
                <input type="email" class="input-field"  id="email" name="email" placeholder="Enter your email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"  required>
                <input type="password" class="input-field" id="pass" name="pass" placeholder="Enter Password" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"  required>
                <input type="hidden" value="NO" id="check_box" name="check_box">
                <input type="checkbox"  value="lsRememberMe" id="check_box" name="check_box"  checked = "checked">  <label <p style="color: rgb(103, 113, 122);" for="rememberMe"> &nbsp; Remember Me </p></label>
                <button type='submit'class='submit-btn'>Log In</button>
                <br>
                <br>

            </form>

            <form id="admin" class="input-group" action="admin_login.php" method="post">
            <input type="email" class="input-field"  id="email" name="email" placeholder="Enter your email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"  required>
                <input type="password" class="input-field" id="pass" name="pass" placeholder="Enter Password" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"  required>
            <input type="hidden" value="NO" id="check_box" name="check_box">
            <input type="checkbox"  value="lsRememberMe" id="check_box" name="check_box"  checked = "checked"> <label <p style="color: rgb(103, 113, 122);" for="rememberMe"> &nbsp; Remember Me </p></label>
            <button type='submit'class='submit-btn'>Log In</button>
                
                
            </form>
        </div>


        <script>
            var x = document.getElementById("visitor");
            var y = document.getElementById("admin");
            var z = document.getElementById("btn");

            function admin(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
             }
            function visitor(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
             }
        </script>

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
