<!-- login.php
	This is the page where users are presented with a form to
	enter their login information in order to log in.
-->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Log in</title>
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
		<h3>Log in to Chirper</h3>
		<form action="" method="post" id="login">
			<!-- Removed as per assignment 3 instructions

			<span class="error_message" id="username_message"></span>
			<input type="text" name="username" id="username" placeholder="Username" /><br /><br />
			-->

			<span class="error_message" id="email_message"></span>
			<input type="email" name="email" id="email" placeholder="Email" /><br /><br />

			<span class="error_message" id="password_message"></span>
			<input type="password" name="password" id="password" placeholder="Password" /><br /><br />

			<input type="submit" value="Log in" />
		</form>
	</article>
	<footer>
		<span>Don't have an account? <a href="signup.php">Sign up here</a>.</span>
	</footer>
</section>


<script type="text/javascript" src="addEventListeners.js"></script>

</body>
</html>