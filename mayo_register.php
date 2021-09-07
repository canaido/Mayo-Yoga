<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: mayo_review.php");
}

include_once 'mayodb_connect.php';

//set validation error flag as falseK
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	//this is to make sure that user has entered valid mail
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	// this is to advise user has password entered is  over the mandatory length
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	// this is to advise that the passwords dont match if there is a typo
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		// this is to advise the user if the information input is successful
		if(mysqli_query($con, "INSERT INTO users(name, email, password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			// this is to advise that the information was not successfully entered to the db
			$errormsg = "Error in registering...Please try again later!";
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
  <title>Please Register</title>
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
        <h3>Registration</h3>
        <div class="col_flex_box">
					<div class="column">
						<figure class="img_align">
							<img src="images/meditate.png" alt="Corporate Classes" class="img_size">
						</figure>
					</div>
          <div class="column">
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
							<fieldset>

								<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Name:</label><br>
									<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
									<span class="text_warning"><?php if (isset($name_error)) echo $name_error; ?></span>
								</div>

								<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Email:</label><br>
									<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
									<span class="text_warning"><?php if (isset($email_error)) echo $email_error; ?></span>
								</div>

								<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Password:</label><br>
									<input type="password" name="password" placeholder="Password" required class="form-control" />
									<span class="text_warning"><?php if (isset($password_error)) echo $password_error; ?></span>
								</div>

								<!-- this div is part of the form -->
								<div class="form-group">
									<label for="name">Confirm Password:</label><br>
									<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
									<span class="text_warning"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
								</div>

								<!-- this div is part of the form -->
								<div class="form-group">
									<input type="submit" name="signup" value="Sign Up" class="form_btn" />
								</div>
							</fieldset>
						</form>
						<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
						<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
      		</div>
					<div class="column">
						<figure class="img_align">
							<img src="images/classes_main.png" alt="Corporate Classes" class="img_size">
						</figure>
					</div>
        </div>
				<div class="col_flex_box">
        	<div class="column">
        		  <p class="reg_text">Already Registered?<a href="login.php">Login Here</a></p>
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
