<head>

  <head lang="en">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
      <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
      <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

      <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
      <title>LMS</title>

      <link href="css/metro.css" rel="stylesheet">
      <link href="css/metro-icons.css" rel="stylesheet">
      <link href="css/metro-responsive.css" rel="stylesheet">
      <link href="css/metro-schemes.css" rel="stylesheet">

      <link href="css/docs.css" rel="stylesheet">

      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/metro.js"></script>
      <script src="js/docs.js"></script>
      <script src="js/prettify/run_prettify.js"></script>
      <script src="js/ga.js"></script>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <?php
        session_start();
         ?>
         <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';

        $conn = mysql_connect($dbhost, $dbuser, $dbpass);

        if(! $conn ) {
           die('Could not connect: ' . mysql_error());
        }

        $sql = 'SELECT firstname, lastname, gender, address, nic, email, pno, degree FROM student_details WHERE username="'.$_SESSION['urname'].'"';
        mysql_select_db('lms');
        $retval = mysql_query( $sql, $conn );

        if(! $retval ) {
           die('Could not get data: ' . mysql_error());
        }

       while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
         $fname=$row['firstname'];
         $lname=$row['lastname'];
         $gend=$row['gender'];
         $add=$row['address'];
         $ni=$row['nic'];
         $ema=$row['email'];
         $pn=$row['pno'];
         $fac=$row['degree'];

        }


        mysql_close($conn);
     ?>


  </head>

  <div class="container">

<header>
  <div>

      <ul class="h-menu block-shadow-impact">
          <a href="http://localhost/LMS-GROUP/home.php"><img src="images/logo/logo.png" alt="NSBM" width="250" height="150" /></a>
                  <li class="place-right ">
            <a href="http://localhost/LMS-GROUP/profile.php" class="dropdown-toggle"  style=" margin-right:5px"><?php echo 'Logged as&nbsp;'.$_SESSION['urname'];?></a>
            <ul  class="d-menu" data-role="dropdown">
                <li><a href="#">My Profile</a></li>
                <li><a href="index.php?action=logout">Logout</a></li>
            </ul>
          </li>
      </ul>
  </div>

</header>

<nav>
<div>
  <ul class="v-menu block-shadow-impact min-size-required">
      <li class="menu-title">First Title</li>
      <li><a href="http://localhost/LMS-GROUP/home.php"><span class="mif-home icon"></span> Home</a></li>
      <li class="divider"></li>
      <li class="menu-title">Second Title</li>
      <li><a href="http://localhost/LMS-GROUP/profile.php"><span class="mif-user icon"></span> Profile</a></li>
      <li><a href="#"><span class="mif-calendar icon"></span> Calendar</a></li>
      <li><a href="#"><span class="mif-image icon"></span> Photo</a></li>
      <li class="divider"></li>
      <li class="menu-title">Third Title</li>
      <li>
          <a href="#" class="dropdown-toggle"><span class="mif-my-location icon"></span> Location</a>
          <ul class="d-menu" data-role="dropdown">
              <li class="menu-title">Title for dropdown</li>
              <li><a href="#">Коллеги</a></li>
              <li><a href="#">Интересно</a></li>
              <li>
                  <div class="item-block text-center">
                      <button class="square-button"><img class="icon" src="images/round.png"></button>
                      <button class="square-button"><img class="icon" src="images/location.png"></button>
                      <button class="square-button"><img class="icon" src="images/group.png"></button>
                  </div>
              </li>
              <li>
                  <a href="#" class="dropdown-toggle">Еще...</a>
                  <ul  class="d-menu" data-role="dropdown">
                      <li><a href="#">Коллеги</a></li>
                      <li><a href="#">Интересно</a></li>
                      <li>
                          <div class="item-block text-center bg-grayLighter">
                              <button class="round-button"><img class="icon" src="images/round.png"></button>
                              <button class="round-button"><img class="icon" src="images/location.png"></button>
                              <button class="round-button"><img class="icon" src="images/group.png"></button>
                              <button class="round-button"><img class="icon" src="images/power.png"></button>
                          </div>
                      </li>
                      <li class="divider"></li>
                  </ul>
              </li>
          </ul>
      </li>
      <li><a href="#"><span class="mif-bubbles icon"></span> Community</a></li>
  </ul>
</div>


  <div data-role="calendar" data-week-start="1" data-buttons="false"></div>


  </nav>

  <article>
    <form id="test">
            <table>
            <td>First Name:</td><td><div class="input-control text"><input type="text" readonly value="<?=$fname?>"></div></td><tr>
            <td>Last Name:</td><td><div class="input-control text"><input type="text" readonly value="<?=$lname?>"></div></td><tr>
            <td>Gender:</td><td><div class="input-control text"><input type="text" readonly value="<?=$gend?>"></div></td><tr>
            <td>Address</td><td><div class="input-control text"><input type="text" value="<?=$add?>"></div></td><tr>
            <td>NIC:</td><td><div class="input-control text"><input type="text" readonly value="<?=$ni?>"></div></td><tr>
            <td>E-mail:</td><td><div class="input-control text"><input type="text" value="<?=$ema?>"></div></td><tr>
            <td>Phone Number:</td><td><div class="input-control text"><input type="text" value="<?=$pn?>"></div></td><tr>
            <td>Faculty:</td><td><div class="input-control text"><input type="text" readonly value="<?=$fac?>"></div></td><tr>
            </table>
     </form>
    </table>


 </article>

 <footer>footer </footer>

 </div>

 </body>
 </html>
