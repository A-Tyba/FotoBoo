

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
              <a href="index.html"><img src="images/fotoboo.png"></a>
              <div class="nav-links" id="navLinks">
                  <i class="fa fa-times" onclick="hideMenu()"></i>
                 <ul>
                      <li><a href="index.html">HOME</a></li>
                      <li><a href="about.html">ABOUT</a></li>
                      <li><a href="registration.html">REGISTER</a></li>
                      <li><a href="login.php">LOGIN</a></li>
                      <li><a href="contact.html">CONTACT</a></li>
                      <li><a href="portfolio.html">PORTFOLIO</a></li>
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
<form class="box" action="edit_photographer.php" method="post">
              
            <h1>SELECTION</h1>

            <p>Click on the drop-down list below:</p>
  <label style="color:#FFFFFF" for="photographers">Choose a photographer:</label>
  <select name="photographers" id="photographers">
  <?php
  
      //connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM portfolio";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);
    

    //fetching the resulting rows as array
    $registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);


    
    // Iterating through the array
    foreach($registration as $reg){
        $check_name=htmlspecialchars($reg['fname']);

        echo "<option value='$check_name'>$check_name</option>";
    }
    ?>
  </select>
  <br><br>
 

            <br> <center> <hr size="2" width="100%" color="lightBlue"></center><br>
    
            <button type='submit'class='submit-btn'>Submit</button>
            
               
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
  