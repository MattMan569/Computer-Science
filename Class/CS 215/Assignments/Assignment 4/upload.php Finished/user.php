<!-- user.php
	This page displays the information of the selected user.
-->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Users</title>
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


<div class="user_container">
	<div class="centered">
		<div class="user_info">
			<section>
				<span>
					<img src="Chirper.png" alt="" /><br />
					Bird<br />
					@birdy<br />
					Date of birth: 15/4/1986<br />
					Email: machinesarecool@gmail.com<br/>
				</span>
			</section>
		</div>
		<div class="user_posts">
			<section class="post">
				<article class="post_info">
					<span>
						<a href="user.php">
						Rechirped: Bird Enthusiast @robinsRule<br />
						<img src="Chirper.png" alt="" /><br />
						Bird<br />
						@birdy<br />
						</a>
						2/2/2018<br />
						11:54am<br/>
					</span>
				</article>
				<article class="post_content">
					<span>Chirp chirp! That is what a bird sounds like, in case you didn't know.
					But of course you knew that. Let's be honest, it would be rather embarassing if
					you didn't.</span>
				</article>
				<div class="clear"></div>
				
				<footer>
					<img src="ThumbsUpBW.png" alt="" />
					<img src="ThumbsDownBW.png" alt="" />
					<span class="positive space_left">+13</span><span> | </span><span class="negative">-5</span>
					<a href="post.php"><img src="Rechirp.png" alt="" class="space_left"/></a>
				</footer>
			</section>
			
			<section class="post">
				<article class="post_info">
					<span>
						<a href="user.php">
						<img src="Chirper.png" alt="" /><br />
						Bird<br />
						@birdy<br />
						</a>
						27/1/2018<br />
						5:21am<br/>
					</span>
				</article>
				<article class="post_content">
					<span>The early bird gets the worm :)</span>
				</article>
				<div class="clear"></div>
				
				<footer>
					<img src="ThumbsUpBW.png" alt="" />
					<img src="ThumbsDownBW.png" alt="" />
					<span class="positive space_left">+2</span><span> | </span><span class="negative">0</span>
					<a href="post.php"><img src="Rechirp.png" alt="" class="space_left"/></a>
				</footer>
			</section>
		</div>
		<div class="clear"></div>
	</div>
</div>


<script type="text/javascript" src="addEventListeners.js"></script>

</body>
</html>