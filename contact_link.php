<!DOCTYPE html>
<html lang="en">
<head>
  <!-- universal character set -->
  <meta charset="utf-8">
  <!-- screen width detection -->
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Details and Support Links</title>
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
        <h3>Contact Us</h3>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <!-- article header -->
            <h4>Location:</h4>
            <!-- id sets the size and responsivness of the map area displayed -->
            <div id="map"></div>
            <!-- script used for location functionality -->
            <script>
              function initMap() {
                var uluru = { lat: 53.7954203, lng: -9.314991 };
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 16,
                  center: uluru,
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map,
                });
              }
            </script>
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo1CiZy2O58U0sCF2IG8H_xTqxncqPMus&callback=initMap">
            </script>
          </article>
          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <h4>Address:</h4>
            <p>The Punch Bowl, Ballyheane, Castlebar, Mayo, Ireland./p>
            <h4>Phone:</h4>
            <p>+353 87 7645 123</p>
            <h4>E-mail:</h4>
            <p><a href="mailto:info@fakeyoga.ie">info@fakeyoga.ie</a></p>
            <h4>Directions:</h4>
            <p>From the North, West or East, head for the train station in Castlebar. instead of taking left, stay on road and Ballyheane is next town in 5 mins drive.</p>
            <p>From the South, Head for Castlebar and Ballyheane is last town before Castlebar</p>
          </article>
        </div>
        <!-- class is a flex box and is used for positioning of columns and their responsivness -->
        <div class="col_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <article class="column">
            <!-- class is a flex box and is used for positioning of columns and their responsivness -->
            <div class="col_flex_box">
              <!-- column class styles the width of the respectitive child element -->
              <div class="column">
                <h4>Parking:</h4>
                <p>Parking available at back of the building or on the main road.</p>
                <p>Please do not park at the petrol station</p>
              </div>
              <!-- column class styles the width of the respectitive child element -->
              <div class="column">
                <h4>Studio:</h4>
                <p>The Studio is above the pub. Please ask the barman for location of stairs if its your first time attending.</p>
              </div>
            </div>
          </article>
        </div>
      </section>
      <section>
        <!-- section header -->
        <h3>Links</h3>
        <article>
          <!-- article header and link -->
          <h4><a href="https://macallafarm.ie/">Macalla Farm Resort</a></h4>
          <!-- class is a flex box and is used for positioning of columns and their responsivness -->
          <div class="col_flex_box">
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <p>Macalla Farm (formerly Clare Island Retreat Centre) is a small, family run retreat centre and working organic farm situated on Clare Island off the west coast of Ireland.</p>
            </div>
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <figure class="img_align">
                <a href="https://macallafarm.ie/"><img src="https://macallafarm.ie/wp-content/uploads/2015/02/macalla-farm-retreats-logo.png" alt="Burren Yoga" class="img_size"></a>
              </figure>
            </div>
          </div>
        </article>
        <article>
          <!-- article header and link -->
          <h4><a href="http://www.yoga-ireland.com/">Yoga Ireland</a></h4>
          <!-- class is a flex box and is used for positioning of columns and their responsivness -->
          <div class="col_flex_box">
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <p>Providing information about hatha yoga and meditation in Ireland.  List of classes, directory of qualified teachers and information about upcoming yoga events, seminars, retreats, holidays and courses.</p>
            </div>
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <figure class="img_align">
                <a href="http://www.yoga-ireland.com/"><img src="images/other/yoga_ireland.jpg" alt="Burren Yoga" class="img_size"></a>
              </figure>
            </div>
          </div>
        </article>
        <article>
          <!-- article header and link -->
          <h4><a href="https://www.burrenyoga.com/">The Burren Yoga & Meditation Centre</a></h4>
          <!-- class is a flex box and is used for positioning of columns and their responsivness -->
          <div class="col_flex_box">
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <p>A beautiful yoga centre in the heart of The Burren in County Clare. The centre was founded by yoga teacher Dave Brocklebank with the motivation of setting up a very comfortable retreat centre to be the best possible environment to learn yoga and meditation and to also to deepen the practice of those of you who already practice.</p>
            </div>
            <!-- column class styles the width of the respectitive child element -->
            <div class="column">
              <figure class="img_align">
                <a href="https://www.burrenyoga.com/"><img src="images/other/burren_yoga_logo.png" alt="Burren Yoga" class="img_size"></a>
              </figure>
            </div>
          </div>
        </article>
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
