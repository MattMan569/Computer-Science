﻿<!-- post.php
	This is the page where users post and repost content.
-->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Create a post</title>
	<script type="text/javascript" src="validate.js"></script>
	<script type="text/javascript" src="features.js"></script>
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

<div class="post_page">
	<section class="form">
		<article class="form">
			<h3>Create a Chirp</h3>
			<span class="error_message" id="post_message"></span>
			<textarea name="post" id="post" form="chirp_form" rows="5" cols="50"></textarea>
			<form action="" method="post" id="chirp_form">
				<div class="inline" id="character_count"><span>Character count: <span id="count">0</span></span></div><br />
				<input type="submit" value="Post" />
			</form>
		</article>
	</section>
</div>


<script type="text/javascript" src="addEventListeners.js"></script>

</body>
</html>