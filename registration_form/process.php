<?php
		$server = "localhost";
		$username = "root";
		$pwd = "";
		$db = "registrations";
		$emailMsg = "";
		$unameMsg = "";
		$success = "";

		$connection = mysqli_connect($server,$username,$pwd,$db);

				if ($connection) {
						if (isset($_POST["signup"])) {
								$fullName = $_POST["fullname"];
								$email = $_POST["email"];
								$userName = $_POST["username"];
								$passWord = $_POST["password"];
							
									$check_email = "SELECT * FROM register WHERE email='$email'";
									$check_uname = "SELECT * FROM register WHERE username='$userName'";
									
									$result_e = $connection->query($check_email);
									$result_u = $connection->query($check_uname);

										if ((mysqli_num_rows($result_e) > 0 )|| (mysqli_num_rows($result_u) > 0 )) {
												if (mysqli_num_rows($result_e) > 0) {

													$emailMsg = "already Exists!!!";

												}
												 if (mysqli_num_rows($result_u) > 0) {

													$unameMsg = "username already used!!";
												}
											
										}else{
											$insert = "INSERT INTO register (fullname,email,username,password) VALUES ('$fullName','$email','$userName','$passWord')";
											$result1 = $connection->query($insert);
											$success = "Registration Successfull!!";
										}
								}//isset
							}//connection
		
		
?>