<!-- index.php
	This page is the post list page.
	It is the default and primary page of the website.
-->


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Home</title>
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
		<img src="ThumbsUpBW.png" alt="" id="test"/>
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
			Bob<br />
			@TotallyNotBob<br />
			</a>
			2/2/2018<br />
			1:39pm<br/>
		</span>
	</article>
	<article class="post_content">
		<span>Hi I'm Bob! Be sure to check out my new website at:
		<a href="www2.cs.uregina.ca/~bob">www2.cs.uregina.ca/~bob</a></span>
	</article>
	<div class="clear"></div>
	
	<footer>
		<img src="ThumbsUpBW.png" alt="" />
		<img src="ThumbsDownBW.png" alt="" />
		<span class="positive space_left">+1</span><span> | </span><span class="negative">0</span>
		<a href="post.php"><img src="Rechirp.png" alt="" class="space_left"/></a>
	</footer>
</section>


<section class="post">
	<article class="post_info">
		<span>
			<a href="user.php">
			<img src="Chirper.png" alt="" /><br />
			John Johnny Johnson<br />
			@jojojo<br />
			</a>
			1/2/2018<br />
			9:03pm<br/>
		</span>
	</article>
	<article class="post_content">
		<span>Thanks a lot <a href="user.php" class="user_link">@TotallyNotBob</a> for once again reminding me how
		unimaginative my parents were when naming me.</span>
	</article>
	<div class="clear"></div>
	
	<footer>
		<img src="ThumbsUpBW.png" alt="" />
		<img src="ThumbsDownBW.png" alt="" />
		<span class="positive space_left">+3</span><span> | </span><span class="negative">-9</span>
		<a href="post.php"><img src="Rechirp.png" alt="" class="space_left"/></a>
	</footer>
</section>

	
<script type="text/javascript" src="addEventListeners.js"></script>

</body>
</html>
