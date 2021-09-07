<?php
session_start();
include_once 'mayodb_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- universal character set -->
  <meta charset="utf-8">
  <!-- screen width detection -->
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Workshop Information</title>
  <!-- CSS reset -->
  <link rel="stylesheet" type="text/css" href="css/css_reset.css">
  <!-- Custom CSS styles -->
  <link rel="stylesheet" type="text/css" href="css/mayo_styles.css">
  <link rel="stylesheet" type="text/css" href="css/mayo_php_styles.css">
</head>
<body>
  <div class="page_wrap">
    <header>
    <div class="menu_area"><!-- menu area -->
      <!-- menu area -->
      <label for="toggle-1" class="toggle-menu"><!-- hamburger -->
      <span class="hamburger_box">
        <span class="hamburger_line"></span>
        <span class="hamburger_line"></span>
        <span class="hamburger_line"></span>
      </span>
      </label>
      <input type="checkbox" id="toggle-1"><!-- /hamburger -->
      <nav class="drop_nav"><!-- hamburger list items -->
        <ul>
          <li><a href="index_mayo.php">Home</a></li>
          <li><a href="yoga_style.php">Yoga</a></li>
          <li><a href="mayo_gallery.php">Gallery</a></li>
          <li><a href="class_info.php">Classes</a></li>
          <li><a href="reiki_heal.php">Reiki</a></li>
          <li><a href="contact_link.php">Contact</a></li>
        </ul>
      </nav><!-- /hamburger list items -->
    </div>
    <div>
      <nav class="top_nav"><!-- top right list items -->
        <ul>
          <li><a href="about_mayo.php">About</a></li>
          <li><a href="blog_mayo.php">Blog</a></li>
          <li><a href="https://www.amazon.co.uk/s/ref=nb_sb_noss_1?url=search-alias%3Daps&field-keywords=yoga" target="_blank">Shop</a></li>
        </ul>
      </nav><!-- /top right list items -->
    </div><!-- /menu area -->
    <div>
      <!-- this is the main logo in the header -->
      <h1><a href="index_mayo.php">Mayo Yoga</a></h1>
    </div>
    </header>
    <main>
      <section>
        <h3>Workshops</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <p>There’s no better way to take your practice to the next level than our detailed in-house workshops every second Saturday & Sunday. On top of that, we also bring some of the best international yoga teachers to you here in Connocht.</p>
            <p>Workshops offer a unique opportunity to establish a deeper connection with your yoga practice. Time is taken, and often more detailed instructions are offered, to help students explore their practice in a deeper way.</p>
            <p>Yoga is one of the original concepts which today would be labelled as holistic. That means that the body is related to the breath; both are related to the brain; in turn this links with the mind, which is a part of consciousness.</p>
          </div>
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <figure class="img_align">
              <img src="images/classes/yoga_pose.png" alt="Worhshops" class="img_size" id="pose_image">
            </figure>
          </div>
        </div>
      </section>
      <section>

        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <figure class="img_align">
              <img src="images/classes/work_img.png" alt="Worhshops" class="img_size">
            </figure>
          </div>
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <h4>The Workshop will Incorporate:</h4>
            <ul>
              <li>Pranayama - Breathing exercises</li>
              <li>Chanting Meditation</li>
              <li>Wheel Exercies</li>
              <li>Block Exercies</li>
              <li>Core Exercies</li>
              <li>Arm Balance Exercies</li>
            </ul>
            <h4>Cost: 45</h4>
            <h4>Hot drinks and snacks provided after each class.</h4>
          </div>
        </div>
      </section>
      <section>
        <h3>Want to leave a review?</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <?php if (isset($_SESSION['usr_id'])) { ?>
            <p class="signed-in_header">Signed in as <?php echo $_SESSION['usr_name']; ?></p>
          </div>
        </div>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <!-- class styles the button of php to display the users are logged in -->
            <ul class="registration_log_btn_list">
              <li><a href="mayo_review.php" class="form_btn">Leave a Review</a></li>
              <li><a href="logout.php" class="form_btn">Log Out</a></li>
              <?php } else { ?>
            </ul>
            <!-- class styles the button of php to display the users are logged out -->
            <ul class="registration_log_btn_list">
              <li><a href="login.php" class="form_btn">Login</a></li>
              <li><a href="mayo_register.php" class="form_btn">Sign Up</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </section>
      <section><!-- testimonials area -->
        <h3 id="workshop_head">Testimonials</h3>
        <div class="col_flex_box">
          <div class="column">
            <!-- start of php  -->
            <?php
            //this is required for connection to db
            include('mayodb_connect.php');
            //this will get the records for the query
            if ($result = $con->query("SELECT * FROM users WHERE catagorey = 'Workshop' ORDER BY id DESC"))
            {
              //display records when available
              if ($result->num_rows > 0)
              {
                // this will display records in a table
                echo "<table border='1' cellpadding='10'>";

                // table header
                while ($row = $result->fetch_object())
                {
                  // this will be the rows where data items are shown
                  echo "<tr>";
                  echo "<td>" . $row->review . "</td>";
                  echo "<tr>";
                  echo "<td> - " . $row->name . "</td>";
                }

                echo "</table>";
              }
              // if nothing to display an alert msg will show up instead.
              else
                {
                  echo "No results to display!";
                }
              }

              // this will will show an error if there is an issue with the query to the db
              else
              {
                echo "Error: " . $con->error;
              }
            // this is required to close the db and always needed.
            $con->close();
            ?>
          </div>
        </div>
      </section>
    </main>
    <footer class="btm-foot">
      <!-- class is a flex box and is used for positioning of columns and their responsivness -->
      <div class="col_flex_box">
        <!-- this class styles the column of the hover image button -->
        <div class="column">
          <p>A: The Punch Bowl, Ballyheane, Castlebar, Mayo, Ireland.</p>
          <p>T: +353 87 7645 123</p>
        </div>
        <!-- this class styles the column of the hover image button -->
        <div class="column">
          <!-- this class styles the logo font -->
          <p>&copy; <span class="mayo_logo">Mayo Yoga</span> 2018</p>
        </div>
        <!-- this class styles the column of the hover image button -->
        <div class="column">
          <a href="mailto:info@fakeyoga.ie">
            <!-- this class styles image button on the footer -->
            <img src="images/other/email.png" alt="Email" class="foot_icons">
          </a>
          <a href="www.facebook.com" target="_blank">
            <!-- this class styles image button on the footer -->
            <img src="images/other/fb_logo.png" alt="Facebook Address" class="foot_icons">
          </a>
        </div>
      </div>
    </footer>
  </div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Custom jQuery files -->
  <script src="js/mayo_script.js"></script>
</body>
</html>
