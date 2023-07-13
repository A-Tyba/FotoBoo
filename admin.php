
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
    $sql = "SELECT count FROM contact";


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
    $sql = "SELECT * FROM portfolio";


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
            <a href="index.html"><img src="images/fotoboo.png"></a>
          </div>
          <ul>
            <li><img src="images/dashboard.png" alt="">&nbsp; Dashboard </li>
            <li><img src="images/eye.png" alt="">&nbsp; Viewers</li>
            <li><img src="images/order.png" alt="">&nbsp; Orders</li>
            <li><img src="images/cash.png" alt="">&nbsp; Income</li>
            <li><img src="images/bell.png" alt="">&nbsp; Notifications</li>
            <li><img src="images/setting.png" alt="">&nbsp; Settings</li>
            <li><img src="images/add.png" href="photographer_selection.html" alt="">&nbsp; Edit Photographers</li>
            <li><img src="images/log-out.png" alt="">&nbsp; Log Out</li>
          </ul>
      </div>
      <div class="contain">
          <div class="head">
              <div class="tav">
                  <div class="search">
                      <input type="text" placeholder="Search..">
                      
                  </div>
                  <div class="user">
                      <a href="#" class="btn">Add New</a>
                      <img src="images/bell.png" alt="">
                      
                       

                      
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
                        <img src="images/cash.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="bix">
                        <h2><?php echo "<h2>" . $count3 . "</h2>"; ?></h2>
                        <h3>Feedbacks</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/order.png" alt="">
                    </div>
                </div>
              </div>
              <div class="conten-2">
                  <div class="recent-payment">
                      <div class="title">
                          <h3>User Feedback</h3>
                          <a href="#" class="btn">View All</a>
                      </div>
                      <table>
                          <tr>
                              <th>Customer Name</th>
                              <th>Photographer Name</th>
                              <th>Amount</th>
                              <th>Status</th>
                          </tr>
                          <tr>
                              <td>Najme Al Nahian</td>
                              <td>Lara Jade</td>
                              <td>50k</td>
                              <td>Pending</td>
                          </tr>
                          <tr>
                            <td>Sara khan</td>
                            <td>Gavin Gough</td>
                            <td>38k</td>
                            <td>Declined</td>
                        </tr>
                        <tr>
                            <td>Tisha Ahmed</td>
                            <td>Dan Kennedy</td>
                            <td>20k</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>Ryan Abid</td>
                            <td>Deb Schwedhelm</td>
                            <td>32k</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>Sanjida Khanom</td>
                            <td>Deanie Chen</td>
                            <td>65k</td>
                            <td>Pending</td>
                        </tr>
                      </table>
                  </div>
                  <div class="new-customers">
                    <div class="title">
                        <h3>New Users</h3>
                        
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td><img src="images/eye.png" alt=""></td>
                            <td>Etraat Zerin</td>
                            <td><img src="images/bell.png" alt=""></td>
                        </tr> 
                        <tr>
                            <td><img src="images/eye.png" alt=""></td>
                            <td>Saida Iman</td>
                            <td><img src="images/bell.png" alt=""></td>
                        </tr> 
                        <tr>
                            <td><img src="images/eye.png" alt=""></td>
                            <td>Ahnaf Abid</td>
                            <td><img src="images/bell.png" alt=""></td>
                        </tr> 
                       
                        
                    </table>
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
