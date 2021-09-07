<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: mayo_review.php");
}

include_once 'mayodb_connect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: mayo_review.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
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
  <title>Please Login</title>
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
    </div>
    </header>
    <main>
      <section>
				<!-- section header -->
        <h3>Please Login</h3>
				<!-- class is a flex box and is used for positioning of columns and their responsivness -->
	      <div class="col_flex_box">
	        <!-- this class styles the column of the hover image button -->
	        <div class="column">
            <figure class="img_align">
              <img src="images/meditate.png" alt="Corporate Classes" class="img_size">
            </figure>
          </div>
					<!-- this class styles the column of the hover image button -->
	        <div class="column">
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
							<fieldset>
      					<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Email</label>
									<input type="text" name="email" placeholder="Your Email" required class="form_inputs" />
								</div>
      					<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Password</label>
									<input type="password" name="password" placeholder="Your Password" required class="form_align" />
								</div>
      					<!-- this div is part of the form -->
								<div class="form-group">
									<input type="submit" name="login" value="Login" class="form_btn" />
								</div>
							</fieldset>
						</form>
						<!-- this php is to signal if request was successful or not -->
						<span class="text-danger"><?php if
						 (isset($errormsg)) { echo $errormsg; } ?></span>
      		</div>
					<!-- this class styles the column of the hover image button -->
	        <div class="column">
						<figure class="img_align">
							<img src="images/classes_main.png" alt="Corporate Classes" class="img_size">
						</figure>
					</div>
      	</div>
				<!-- class is a flex box and is used for positioning of columns and their responsivness -->
	      <div class="col_flex_box">
	        <!-- this class styles the column of the hover image button -->
	        <div class="column">
        		<p class="reg_text">New User? <a href="zen_register.php">Sign Up Here</a></p>
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
