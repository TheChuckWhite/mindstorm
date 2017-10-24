<?php
include_once("php/news.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Da Vinci University</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<header>
		<div id="headWrap">
			<div id="logo">
				<img src="img/logo.png">
				<div id="vinci">Da Vinci University</div>
				<div id="learn">Learning never exhausts the mind</div>
			</div>

			<div id="flag">
				<a href="news.html.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li><a href="indexit.html">Home</a></li>
				<li><a href="aboutit.html">About</a></li>
				<li><a href="coursesit.html">Courses</a></li>
				<li><a href="eventsit.html">Events</a></li>
				<li><a href="newsit.html.php">News</a></li>
				<li><a href="contactit.html">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<?php
				foreach($newsitems as $newsitem){
					echo "
					<article>
						<div><h1>".$newsitem['title']."</h1> <span>".$newsitem['date']."</span> </div>
						<p>".$newsitem['description']."</p>
					</article>
					";
				}
			?>
		</div>

		<aside>
			<div>
				<div class="newsitem_sidebar">
					<h3>NewsItem1</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>NewsItem2</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>NewsItem3</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
			</div>
			<div>
				Weather
			</div>
			<div id="social">
				<div>
					<img src="img/facebook.png" alt="facebook">
				</div>
				<div>
					<img src="img/twitter.png" alt="twitter">
				</div>
				<div>
					<img src="img/youtube.png" alt="youtube">
				</div>				
			</div>
		</aside>
	</div>
	<footer>
		<div class="footWrap">
			<div class="footBox">
				<h3>Locations</h3>
				<ul>
					<li>Emmen</li>
					<li>Groningen</li>

				</ul>
			</div>
			<div class="footBox">
				<h3>Da Vinci University</h3>
				<ul>
					<li><a href="indexit.html">Home</a></li>
					<li><a href="aboutit.html">About</a></li>
					<li><a href="coursesit.html">Courses</a></li>
					<li><a href="eventsit.html">Events</a></li>
					<li><a href="newsit.html.php">News</a></li>
					<li><a href="contactit.html">Contact</a></li>
				</ul>
			</div>
			<div class="footBox">
				<h3>Open Day Registration</h3>
			</div>
		</div>
	</footer>
	<div id="footbar">
		<div class="footWrap">
			Da Vinci University
			<span id="copy">&copy; 2018</span>
		</div>
			
	</div>
</body>
</html>