<?php include("process.php") ?>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
	<div class="wrapper">
		<img src="img/background.jpg" alt="background">
		<div class="registration">
		<form name="registerForm" action="index.php" onsubmit="return validateForm()" method="post">
			<?php echo $success; ?>
				<h1>Sign Up</h1>

					<label>Full Name*</label>
					<input type="text" name="fullname" placeholder="	Full Name.." required>

							<label>Email*</label>  <span class="error"><?php echo $emailMsg; ?></span>
							<input type="email" name="email" placeholder="	Email.." required>

									<label>User Name*</label>  <span class="error"><?php echo $unameMsg; ?></span>
									<input type="text" name="username" placeholder="	User Name.." required>

										<label>Password*</label>
										<input type="password" name="password" placeholder="	  ********  " required>

											<label>Repeat Password*</label>
											<input type="password" name="repeat-password" placeholder=" 	 ********  " required>

												<div><input type="checkbox" name="checkbox" id="terms" required>
												<label for="terms">I agree to the <b>Terms of User</b></label></div>

													<input type="submit" name="signup" value="Sign Up">
													<span><a href="#">Sign In <i class="fas fa-arrow-right"></i></a></span>
		</form>
		</div><!--registration-->
	</div><!--wrapper-->
	<script type="text/javascript">
		function validateForm(){
			var fullName_v = document.forms["registerForm"]["fullname"].value;
			var email_v = document.forms["registerForm"]["email"].value;
			var username_v = document.forms["registerForm"]["username"].value;
			var password_v = document.forms["registerForm"]["password"].value;
			var repeatpassword_v = document.forms["registerForm"]["repeat-password"].value;

				if (password_v.length < 6|| repeatpassword_v.length < 6){
					alert("password should contain atleast 6 characters");
					return false;
				}
				if (!(password_v == repeatpassword_v)) {
					alert("Password mismatch");
					return false;
				}

		}
	</script>
</body>
</html>