<!DOCTYPE html>
<html lang="en">
<head>
  <!-- universal character set -->
  <meta charset="utf-8">
  <!-- screen width detection -->
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Class Information</title>
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
        <h3>Classes Information</h3>
        <!-- flex box for responsivness with screen size change -->
        <div class="book_flex_box">
          <!-- column class styles the width of the respectitive child element -->
          <figure class="class_column">
            <a href="even_class.php">
              <img src="images/classes/class_even.png" alt="Evening Classes" class="classes_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
              <!-- this class styles the parent box of hover element text of the hover image button -->
              <div class="hover_box">
                <!-- this class styles the font of the hover image button -->
                <p class="hover_text">Evening Class</p>
              </div>
            </a>
          </figure>
          <!-- column class styles the width of the respectitive child element -->
          <figure class="class_column">
            <a href="preg_yoga.php">
              <img src="images/classes/class_preg.png" alt="Pregnancy Classes" class="classes_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
              <!-- this class styles the parent box of hover element text of the hover image button -->
              <div class="hover_box">
                <!-- this class styles the font of the hover image button -->
                <p class="hover_text">Pregnancy Class</p>
              </div>
            </a>
          </figure>
          <!-- column class styles the width of the respectitive child element -->
          <figure class="class_column">
            <a href="corp_class.php">
              <img src="images/classes/class_corp.png" alt="Corporate Classes" class="classes_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
              <!-- this class styles the parent box of hover element text of the hover image button -->
              <div class="hover_box">
                <!-- this class styles the font of the hover image button -->
                <p class="hover_text">Corporate Class</p>
              </div>
            </a>
          </figure>
          <!-- column class styles the width of the respectitive child element -->
          <figure class="class_column">
            <a href="work_shop.php">
              <img src="images/classes/class_work.png" alt="Workshops" class="classes_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
              <!-- this class styles the parent box of hover element text of the hover image button -->
              <div class="hover_box">
                <!-- this class styles the font of the hover image button -->
                <p class="hover_text">Workshops</p>
              </div>
            </a>
          </figure>
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
