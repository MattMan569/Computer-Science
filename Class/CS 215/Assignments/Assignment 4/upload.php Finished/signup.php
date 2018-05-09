<!-- signup.php
	This is the page where users enter all required
	information in order to sign up for the website.
-->




<?php

// Regular expressions
$regex_username = "/^\w+$/";					// Only word characters
$regex_email = "/^(www\.)?\w+@\w+\.\w{2,3}$/";	// Proper email format
$regex_birthday = "/^\d{4}\/\d{2}\/\d{2}$/";	// YYYY/MM/DD format
$regex_password = "/^(?=.*\d+)\S{8,}$/";		// Minimum 8 characters, at least one non-letter

$is_valid = true;
$error_message = "";


if (isset($_POST["submitted"]) && $_POST["submitted"])
{
	// Get and trim form data
	$username = trim($_POST["username"]);
	$email = trim ($_POST["email"]);
	$birthday = trim ($_POST["birthday"]);
	$password = trim ($_POST["password"]);
	$confirm_password = trim ($_POST["confirm_password"]);
	
	// Check for blank fields
	if (strlen($username) == 0 || $username == NULL ||
		strlen($email) == 0 || $email == NULL ||
		strlen($birthday) == 0 || $birthday == NULL ||
		strlen($password) == 0 || $password == NULL ||
		strlen($confirm_password) == 0 || $confirm_password == NULL)
	{
		$error_message = "Fields contain invalid data.<br />";
		$is_valid = false;
	}
	
	// Check against regular expressions
	$valid_username = preg_match($regex_username, $username);
	$valid_email = preg_match($regex_email, $email);
	$valid_birthday = preg_match($regex_birthday, $birthday);
	$valid_password = preg_match($regex_password, $password);
	if (!$valid_username || !$valid_email || !$valid_birthday || !$valid_password)
	{
		$error_message = "Fields contain invalid data.<br />";
		$is_valid = false;
	}
	
	// Data is valid
	if ($is_valid)
	{
		// Connect to database
		$db = new mysqli("localhost", "polsom2m", "LM4ttSQL", "polsom2m");
		if ($db->connect_error)
		{
			die("Connection failed: " . $db->connect_error);
		}
		
		// Check to ensure email and username are unique
		$query = "SELECT * FROM Users WHERE username = '$username'";
		$result = $db->query($query);
		if ($result->num_rows > 0)
		{
			$is_valid = false;
			$error_message = "Username " . $username . " is taken.<br />";
		}
		$query = "SELECT * FROM Users WHERE email = '$email'";
		$result = $db->query($query);
		if ($result->num_rows > 0)
		{
			$is_valid = false;
			$error_message .= "Email " . $email . " is taken.<br />";
		}
		
		// OK to upload the data
		if ($is_valid)
		{
			// Upload the user's image
			
			$target_dir = "uploads/user_images/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOK = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
			
			// Check if image is real
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if (!$check)
			{
				$uploadOK = 0;
				$error_message .= "File is not an image.<br />";
			}
			
			//Check if file exists
			if (file_exists($target_file))
			{
				$uploadOK = 0;
				$error_message .= "File already exists.<br />";
			}
			
			// Check file size
			if ($_FILES["image"]["size"] > 1000000)
			{
				$uploadOK = 0;
				$error_message .= "File is too large.<br />";
			}
			
			// Allow only certain formats
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
			{
				$uploadOK = 0;
				$error_message .= "Only jpg, jpeg, and png files are allowed.<br />";
			}
			
			
			// Upload if the image is valid
			if ($uploadOK == 1)
			{
				// Add the user's information to the database
				$query = "INSERT INTO Users (username, email, date_of_birth, password)
							VALUES ('$username', '$email', '$birthday', '$password');";
				$result = $db->query($query);
				if ($result == true)
				{
					// Add the image under the name: user_id.$imageFileType
					$query = "SELECT user_id FROM Users WHERE username = '$username'";
					$result = $db->query($query);
					$row = $result->fetch_assoc();
					
					// Upload the user's image
					$target_file = $target_dir . $row["user_id"] . "." . $imageFileType;
					if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) == false)
					{
						$error_message .= "There was an error uploading the file.<br />";
					}
					// Set the database's user_image field
					$query = "UPDATE Users SET user_image = '$target_file' WHERE username = '$username'";
					$result = $db->query($query);
					// Done uploading the image
					
					header("Location: login.php");
					$db->close();
					exit();
				}
				else
				{
					$error_message .= "There was an error when uploading the data to the database.<br />";
					$error_message .= $db->error . "<br />";
				}
			}
			else
			{
				$error_message .= "Image was not uploaded.<br />";
			}
		}
		
		$db->close();
	}
}

?>




<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Sign up</title>
	<!-- <script type="text/javascript" src="validate.js"></script> -->
	<script type="text/javascript" src="validate.js"></script>
</head>

<body>


<header>
	<div class="container">
		<div class="centered">
			<img src="Chirper.png" alt="" width="24" height="24" />
			<p class="site_name">Chirper</p>
			<nav>
				<a href="index.php">Home</a>
				<a href="post.php">Create a post</a>
				<a href="user.php" id="midpoint">View users</a>
				<a href="login.php">Log in</a>
				<a href="signup.php">Sign up</a>
			</nav>
		</div>
	</div>
</header>


<section class="form">
	<article class="form">
		<h3>Sign up for Chirper</h3>
		<p class="error_message"><?=$error_message?></p>
		<form action="signup.php" method="post" enctype=multipart/form-data id="signup">
			<input type="hidden" name="submitted" value="1" />
		
			<span class="error_message" id="username_message"></span>
			<input type="text" name="username" id="username" placeholder="Username" /><br /><br />

			<span class="error_message" id="email_message"></span>
			<input type="email" name="email" id="email" placeholder="Email" /><br /><br />

			<span class="error_message" id="birthday_message"></span>
			<input type="text" name="birthday" id="birthday" title="Date of birth" placeholder="DOB: yyyy/mm/dd" /><br /><br />
			<!-- <input type="date" name="birthday" title="Date of birth" /><br /><br /> -->

			<span class="error_message" id="password_message"></span>
			<input type="password" name="password" id="password" placeholder="Password" /><br /><br />

			<span class="error_message" id="confirm_message"></span>
			<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" /><br /><br />

			<span>Select a profile picture:  </span>
			<input type="file" name="image" accept="image/*" required="required" /><br /><br />

			<input type="submit" value="Sign up" />
		</form>
	</article>
	<footer>
		<span>Already have an account? <a href="login.php">Log in here</a>.</span>
	</footer>
</section>


<script type="text/javascript" src="addEventListeners.js"></script>

</body>
</html>