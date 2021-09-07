<!DOCTYPE html>
<html lang="en">
<head>
  <!-- universal character set -->
  <meta charset="utf-8">
  <!-- screen width detection -->
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Mayo Yoga</title>
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
    <div class="landing_img_box">
      <figure><!-- this is the main landing image -->
        <img src="images/main/cover_image_c.png" alt="Mayo Yoga" class="header_img">
      </figure>
    </div>
    <main>
      <section><!-- intro area -->
        <h3>WELCOME TO <span class="mayo_logo logo_size">MAYO YOGA</span></h3><!-- section header area. class styles font and size of the logo -->
        <figure class="img_align">
          <img src="images/main/main_blur.jpg" alt="Antoinette" id="main_image"><!-- section image. id postions the image and id styles the size  -->
        </figure>
        <!-- introduction text -->
        <p>A warm, relaxed & welcoming yoga space located in Ballyheane, Co. Mayo.  A fully equipped yoga space with mats & props provided, where attendees can relax and enjoy the benefits of yoga in a warm & vibrant setting.</p>
        <p>Drop-in classes, pregnancy centered classes, workshops,  corporate classes, sports classes and private lessons also available. All classes are inspired by forms of Yoga from the heart of anicent India.</p>
        <blockquote>
          <p>"All you need in life is enough.
          Your health is your wealth."</p>
          <footer>- Mayo Saying</footer>
        </blockquote>
      </section><!-- /intro area -->
      <!-- class is a flex box and is used for positioning of columns and their responsivness -->
      <div class="col_flex_box">
        <!-- column class styles the width of the respectitive child element -->
          <section class="column">
            <!-- section header -->
            <h3>Classes</h3>
            <!-- this class styles the column of the hover image button -->
            <figure class="main_img_column">
              <a href="class_info.php">
                <img src="images/main/classes_main.png" alt="Class Info" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                <!-- this class styles the parent box of hover element text of the hover image button -->
                <div class="hover_box">
                  <!-- this class styles the font of the hover image button -->
                  <p class="main_hover_text">View Class Information</p>
                </div>
              </a>
            </figure>
          </section>
          <!-- this class styles the column of the hover image button -->
          <section class="column">
            <!-- section header -->
            <h3>Gallery</h3>
            <!-- this class styles the column of the hover image button -->
            <figure class="main_img_column">
              <a href="mayo_gallery.php">
                <img src="images/main/gallery_thumb.png" alt="Gallery" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                <!-- this class styles the parent box of hover element text of the hover image button -->
                <div class="hover_box">
                  <!-- this class styles the font of the hover image button -->
                  <p class="main_hover_text">View My Personal Gallery</p>
                </div>
              </a>
            </figure>
          </section>
          <!-- this class styles the column of the hover image button -->
          <section class="column">
            <!-- section header -->
            <h3>Testimonials</h3>
            <!-- class is a flex box and is used for positioning of columns and their responsivness -->
            <div class="col_flex_box">
              <div class="column">
                <!-- this class styles the column of the hover image button -->
                <figure class="main_img_column">
                  <a href="even_class.php#evening_head">
                    <img src="images/main/thumb_yoga_stretch.png" alt="Evening Classes" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                    <!-- this class styles the parent box of hover element text of the hover image button -->
                    <div class="hover_box">
                      <!-- this class styles the font of the hover image button -->
                      <p class="main_hover_text">Evening</p>
                    </div>
                  </a>
                </figure>
              </div>
            </div>
            <!-- class is a flex box and is used for positioning of columns and their responsivness -->
            <div class="col_flex_box">
              <!-- this class styles the column of the hover image button -->
              <div class="column">
                <!-- this class styles the column of the hover image button -->
                <figure class="main_img_column">
                  <a href="preg_yoga.php#pregnancy_head">
                    <img src="images/main/thumb_preg_image.png" alt="Pregnancy Classes" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                    <!-- this class styles the parent box of hover element text of the hover image button -->
                    <div class="hover_box">
                      <!-- this class styles the font of the hover image button -->
                      <p class="main_hover_text">Pregnancy</p>
                    </div>
                  </a>
                </figure>
              </div>
              <!-- this class styles the column of the hover image button -->
              <div class="column">
                <!-- this class styles the column of the hover image button -->
                <figure class="main_img_column">
                  <a href="reiki_heal.php#reiki_head">
                    <img src="images/main/thumb_reiki_main.png" alt="Reiki" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                    <!-- this class styles the parent box of hover element text of the hover image button -->
                    <div class="hover_box">
                      <!-- this class styles the font of the hover image button -->
                      <p class="main_hover_text">Reiki</p>
                    </div>
                  </a>
                </figure>
              </div>
            </div>
            <!-- class is a flex box and is used for positioning of columns and their responsivness -->
            <div class="col_flex_box">
              <!-- this class styles the column of the hover image button -->
              <div class="column">
                <!-- this class styles the column of the hover image button -->
                <figure class="main_img_column">
                  <a href="work_shop.php#workshop_head">
                    <img src="images/main/thumb_work_img.png" alt="" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                    <!-- this class styles the parent box of hover element text of the hover image button -->
                    <div class="hover_box">
                      <!-- this class styles the font of the hover image button -->
                      <p class="main_hover_text">Workshops</p>
                    </div>
                  </a>
                </figure>
              </div>
              <!-- this class styles the column of the hover image button -->
              <div class="column">
                <!-- this class styles the column of the hover image button -->
                <figure class="main_img_column">
                  <a href="corp_class.php#corporate_head">
                    <img src="images/main/thumb_meditate.png" alt="Corporate Classes" class="index_btn_imgs"><!-- this class styles the image to give its transtion when not hovered over -->
                    <!-- this class styles the parent box of hover element text of the hover image button -->
                    <div class="hover_box">
                      <!-- this class styles the font of the hover image button -->
                      <p class="main_hover_text">Corporate</p>
                    </div>
                  </a>
                </figure>
              </div>
            </div>
          </section>
      </div>
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
