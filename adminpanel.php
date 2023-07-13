<?php
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM hits";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
	$registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);

	// echo $count= count($registration['count']);
	$count= count($registration);
    $conn->close();


?>

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

	// echo $count= count($registration['count']);
	$count2= count($registration);
    $conn->close();


?>

<?php
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM contact";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
	$registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);

	// echo $count= count($registration['count']);
	$count3= count($registration);

    $conn->close();

  


?>





<?php
//connecting to database called fotoboo
	$conn = mysqli_connect('localhost','root','','fotoboo');
    if(!$conn){
        echo 'Connection error' . mysqli.connect_error();
    }
    


    //writing query for email and pass
    $sql = "SELECT * FROM reviews";


    //making query and getting result
    $db_email = mysqli_query($conn, $sql);


    //fetching the resulting rows as array
	$registration = mysqli_fetch_all($db_email, MYSQLI_ASSOC);

	// echo $count= count($registration['count']);
	$count4= count($registration);
    $conn->close();

    


?>

<!DOCTYPE html>

<html>
    
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">

    <title>Admin Panel</title>
        <link rel="stylesheet" href="style.css">
        
  </head>
  <body>
    
      <div class="side-menu">
          <div class="brand-name">
            <a href="login.html"><img src="images/fotoboo.png"></a>
          </div>
          <ul>
              <br>
            <a href="AdminPanel.php"><center><button type="button" class="sidebtn">DASHBOARD</button></center></a>
            <br>
            <a href="photographer_selection.php"><center><button type="button" class="sidebtn">EDIT PHOTOGRAPHERS</button></center></a>
            <br>
            <a href="user_feedbacks.php"><center><button type="button" class="sidebtn" >VIEW FEEDBACKS</button></center></a>
            <br>
            <a href="login.php"><center><button type="button" class="sidebtn" >LOG OUT</button></center></a>
            <br>
            <br>
            
          </ul>
          
      </div>
      
      <div class="contain">
          <div class="head">
              <div class="tav">
                  <div class="search">
                  </div>
              </div>
          </div>
          
          <div class="conten">
              <div class="cards">
                  <div class="card">
                      <div class="bix">
                      <h2><?php echo "<h2>" . $count . "</h2>"; ?></h2>
                          <h3>Views</h3>
                      </div>
                      <div class="icon-case">
                          <img src="images/eye.png" alt="">
                      </div>
                  </div>
                  <div class="card">
                    <div class="bix">
                    <h2><?php echo "<h2>" . $count4 . "</h2>"; ?></h2>
                        <h3>Reviews</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/download.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="bix">
                    <h2><?php echo "<h2>" . $count2 . "</h2>"; ?></h2>
                        <h3>Photographers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/grapher.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="bix">
                    <h2><?php echo "<h2>" . $count3 . "</h2>"; ?></h2>
                        <h3>Feedbacks</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/feed.jpg" alt="">
                    </div>
                </div>
              </div>
              <div class="conten-2">
                  <div class="recent-payment">
                      <div class="title">
                          

                          <img width="1024" height="576" src="images/Fotoboo.gif" alt="">


                          
                         
                          
                      </div>

                      

                  </div>
              </div>
          </div>

        
      </div>
      <script>
          document.onkeypress = function (e) {
              e = e || window.event;
              if(e.keyCode === 13){
                  document.documentElement.classList.toggle('dark-mode');
              }
          }
      </script>
      
  </body>
</html>