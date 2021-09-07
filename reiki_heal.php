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
  <title>Reiki Healing</title>
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
        <!-- section header -->
        <h3>What is Reiki?</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <p>Reiki Yoga is the union of two ancient traditions to offer physical, mental, and spiritual wellness. It is a soothing practice that combines carefully selected gentle Yin Yoga postures held for 3 to 5 minutes, with a Reiki treatment offered by a master using the imposition of the hands to support and boost the natural healing and cleansing processes in the body.</p>
            <p>A Japanese word, reiki means "universal life energy"; the same term, capitalized, also names the alternative healing modality that aims to channel this energy through a practitioner's hands and transmit it to the client. Reiki practitioners don't regard what they do as manipulating clients' bodies.</p>
            <p>Instead, they believe they are mere conduits of reiki energy and that their hands need only rest on or hover above a recipient's body to get the job done. In fact, they claim Reiki can even be accomplished long distance by a practitioner's focusing energy and intention on a person.</p>
          </div>
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <figure class="img_align">
              <img src="images/classes/reiki_main.png" alt="Reiki Healing" class="img_size">
            </figure>
          </div>
        </div>
      </section>
      <section>
        <!-- section header -->
        <h3>Benefits of Reiki</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <p>Yoga is about movement but remaining still, it’s about changing but accepting the way we are, it’s about investigating our limits and pushing them further, but being kind to ourselves & allowing ourselves to stop. Yoga’s about finding the place inside ourselves that has the answers to all we need to know. Once we quiet the mind the answers to our deepest desire will gently unfold!</p>
            <p>If yoga were an iceberg the physical benefits of our practice would just be the tip. The base would be the immense, intangible mind and soul benefits. Yoga is not just movement through poses. In fact the poses are just 1 of 8 Limbs or parts of traditional yoga practice.</p>
          </div>
          <div class="column">
            <figure class="img_align">
              <img src="images/classes/reiki-heal.png" alt="reiki healing" class="img_size">
            </figure>
          </div>
          <!-- column class styles the width of the respectitive child element -->
          <div class="column">
            <ul id="bene_list">
              <li>Promotes Harmony & Balance</li>
              <li>Creates deep relaxation and helps the body release stress and tension</li>
              <li>Dissolves energy blocks and promotes natural balance between mind, body and spirit</li>
              <li>Assists the body in cleansing itself from toxins and supports the immune system</li>
              <li>Clears the mind and improves focus as you feel grounded & centred</li>
              <li>Accelerates the body's self-healing ability</li>
              <li>Aids better sleep</li>
              <li>Helps spiritual growth and emotional cleansing</li>
            </ul>
          </div>
        </div>
      </section>
      <section>
        <!-- section header -->
        <h3>What can Reiki treat?</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <h4>Cost</h4>
            <p>	Treatment Cost: €55 (takes 60 to 90 minutes approx)
            1 treatment per week is highly recommended for 4 consecutive weeks to get the best results from the Reiki</p>
            <p><a href="mailto:info@fakeyoga.ie">Contact</a> to make an appointment</p>
            <p>Danika is a certified <a href="http://www.reiki.org" target="_blank">Reiki Master</a> and a <a href="https://magnifiedhealing.com/">'Light Healing' Practitioner</a></p>
          </article>
          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <h4>Following are some of the conditions Reiki can treat:</h4>
            <ul>
              <li>Relieves pain, anxiety, and fatigue</li>
              <li>Treats depression</li>
              <li>Enhances quality of life</li>
              <li>Boosts mood</li>
              <li>May improve some symptoms and conditions</li>
            </ul>
          </article>
        </div>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->

          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <h4>Reiki Principles</h4>
            <blockquote>
              <p>Just for today, I will not anger
              Just for today, I will not worry
              Just for today, I will be grateful for all my blessings
              Just for today, I will work with honesty & integrity
              Just for today, I will be kind to all living beings</p>
            </blockquote>
          </article>
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
        <h3 id="reiki_head">Testimonials</h3>
        <div class="col_flex_box">
          <div class="column">
            <!-- start of php  -->
            <?php
            //this is required for connection to db
            include('mayodb_connect.php');
            //this will get the records for the query
            if ($result = $con->query("SELECT * FROM users WHERE catagorey = 'Reiki' ORDER BY id DESC"))
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
    <!-- class on the footer is to differentiate footer from footer in blockquote -->
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
