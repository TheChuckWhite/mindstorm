<?php
define("IN_PAGE", true);
$lang = "en";
$news = include"newsfeed/newsReader.php";

include"php/weather.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Da Vinci University</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">


	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
	<header>
		<div class="headWrap">
			<div class="logo">
				<img src="img/logo.png">
				<div class="vinci">Da Vinci University</div>
				<div class="learn">Learning never exhausts the mind</div>
			</div>

			<div class="flag">
				<a href="aboutit.php"><img src="img/it_flag.png" alt="italian flag"></a>
			</div>
		</div>
	</header>
	<div class="navWrap">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
                <li><a href="photos.php">Photos</a></li>
			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div class="content">
			<article>
				<h2>About Da Vinci University</h2>
				<p>
					When you come to our university you will directly see that it is a true embodiment of the meaning of our name. We are just like Da Vinci – we compare various disciplines in one place, we bring everything together and make it work smoothly like a well-built machine.
				</p>
			
			</article>
			
			<article>
				<h2>About Our Logo</h2>
				<p>
					Our logo is the virtual model of the all famous Da Vinci’s Vitruvian Man. As known, The Vitruvian Man is a visual representation of the canon of proportions. There, the man and architecture blend together to a unified picture of proportions of everything. Same in our university – we blend man with disciplines, bringing them together and giving both the best of each other.
				</p>
			
			</article>
			
			<article>
				<h2>Branches of Da Vinci University</h2>
				<p>
					Our university so far has two locations. Those are in Emmen and Groningen. Both locations are fully open to all students of Da Vinci University no matter the campus. Therefore, thanks to the small distance, all students are welcome to use facilities of both campuses.
				</p>
			
			</article>
			
			<article>
				<h2>Courses Available</h2>
				<p>
					Our university provides a variety of courses to choose from. For the most technical ones we have Electrical Engineering course. For those eager to know how to find everything we have Information Technology. For the romantic creators we have a course of Building Classical Instruments. And, of course, we can accommodate the most lively and technology-friendly students with our Electronic Music course.
				</p>

				<div id="courseButtonDiv">
					<a href="coursesit.php"><input id="coursesBtn" type="button" name="coursesBtn" value="Courses"></a>
				</div>
						
			</article>
			
			<article>
				<h2>Learning Style</h2>
				<p>
					For our university we chose to have a diverse style of obtaining skills and education. We decided that the best way to prepare students for real world is to give them viewpoints both from practical and theoretical sides. This means that apart from more practical workshops, we also have a program of project based learning, where students get a case, and through theoretical approaches try to figure out resolutions.
				</p>
			
			</article>
		</div>
		<aside>
			<div>
				<?php foreach($news as $newsItem){ ?>
				<div class="newsitem_sidebar">
					<h3><a href="news.php"><?= substr($newsItem->title, 0, 40) ?>...</a></h3>
					<p class="desc">
						<?= substr($newsItem->description, 0, 100) ?>...
					</p>
				</div>
				<?php } ?>
				<a href="newsfeed/newsReader.php?lang=<?= $lang ?>" target="_blank"><img src="img/rss.png" alt="rss"></a>
			</div>
            <div class="weather">
                <h3>Weather in Emmen</h3>
                <div class="weather_img"><img src="img/weather/<?=$weatherString?>.png" alt="<?=$weatherString?>"></div>
                <div class="weather_info">
                    <h4><?= $today->text ?></h4>
                    <p><?= $temperature ?>&#176;C</p>
                </div>
            </div>
			<div class="social">
				<div>
					<a href="http://www.facebook.com"><img class="socialimg" src="img/facebook.png" alt="facebook"></a>
				</div>
				<div>
					<a href="http://www.twitter.com"><img class="socialimg" src="img/twitter.png" alt="twitter"></a>
				</div>
				<div>
					<a href="http://www.youtube.com"><img class="socialimg" src="img/youtube.png" alt="youtube"></a>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="photos.php">Photos</a></li>
				</ul>
			</div>
			<div class="footBox">
				<h3>Open Day Registration</h3>
				<form id="openDay" action="openday.php" method="post">
					<input type="text" name="name" placeholder="Name">
					<input type="text" name="mail" placeholder="E-Mail">
					<input id="openDaySubmit" type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
	<div class="footbar">
		<div class="footWrap">
			Da Vinci University
			<span class="copy">&copy; 2018</span>
		</div>
	</div>
</body>
</html>