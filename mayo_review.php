<?php
session_start();
include_once 'mayodb_connect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['reviewform'])) {
	$id = $_SESSION['usr_id'];
	$review = mysqli_real_escape_string($con, $_POST['review']);
	$catagorey = mysqli_real_escape_string($con, $_POST['catagorey']);

	//name can contain only alpha characters and space
	//(!preg_match("/^[a-zA-Z ]+$/",$review))
	if (!preg_match("/^[a-zA-Z ]+$/",$review)) {
		$error = true;
		$review_error = "Review can not be empty.";
	}

	//this is to make sure that user has entered valid catagorey
	if(!preg_match("/^[a-zA-Z ]+$/",$catagorey)) {
		$error = true;
		$catagorey_error = "Please select a catagorey";
	}



	if (!$error) {
		// this is to advise the user if the information input is successful
		if(mysqli_query($con, "UPDATE users SET review = '$review', catagorey = '$catagorey' WHERE review IS NULL AND catagorey IS NULL")) {
			$successmsg = "Thank you for leaving a review, Namaste. You may now logout.";
		}
		else {
			// this is to advise that the information was not successfully entered to the db
			$errormsg = "Error in registering your review...Please try again later!";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- universal character set -->
  <meta charset="utf-8">
  <!-- screen width detection -->
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zen Yoga Review</title>
  <!-- CSS reset -->
  <link rel="stylesheet" type="text/css" href="css/css_reset.css">
  <!-- Custom CSS styles -->
  <link rel="stylesheet" type="text/css" href="css/mayo_styles.css">
  <link rel="stylesheet" type="text/css" href="css/mayo_php_styles.css">
</head>
<body>
  <div class="page_wrap">
    <header>
			<div>
	      <!-- this is the main logo in the header -->
	      <h1><a href="index_mayo.php">Mayo Yoga</a></h1>
	    </div>
    </header>
    <main>
      <section>
        <h3>Review</h3>
        <div class="col_flex_box">
          <div class="column">
            <figure class="img_align">
              <img src="images/meditate.png" alt="Corporate Classes" class="img_size">
            </figure>
          </div>
          <div class="column">
						<?php if (isset($_SESSION['usr_id'])) { ?>
						<p class="signed-in_header">Signed in as <?php echo $_SESSION['usr_name']; ?></p>

            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="reviewform">
              <fieldset>

                <!-- this div is review text area part of the form -->
                <div class="form_group">
                	<textarea name="review" placeholder="Please leave your review" rows="12"><?php if($error) echo $review; ?></textarea>
                  <span class="text_warning"><?php if (isset($review_error)) echo $review_error; ?></span>
                </div>

                <!-- this div is the drop down part of the form -->
                <div class="form_group">
                  <label for="catagorey">Select Catagorey</label>
                  <select name="catagorey" value="<?php if($error) echo $catagorey; ?>">
                    <option value=""></option>
                    <option value="Evening Class">Evening Class</option>
                    <option value="Pregnancy Class">Pregnancy Class</option>
                    <option value="Corporate Class">Corporate Class</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Reiki">Reiki</option>
                    <span class="text_warning"><?php if (isset($catagorey_error)) echo $catagorey_error; ?></span>
                  </select>
                </div>

                <!-- this div is the submit part of the form -->
								<div class="form-group">
									<input type="submit" name="reviewform" value="Submit" class="form_btn" />
								</div>
							</fieldset>
						</form>
						<span class="text_warning"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
						<span class="text_warning"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            <ul class="registration_log_btn_list">
              <li><a href="logout.php" class="form_btn">Log Out</a></li>
              <?php } ?>
            </ul>
          </div>
          <div class="column">
            <figure class="img_align">
              <img src="images/classes_main.png" alt="Corporate Classes" class="img_size">
            </figure>
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
