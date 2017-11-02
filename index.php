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


	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
	<header>
		<div id="headWrap">
			<div id="logo">
				<img src="img/logo.png" alt="logo">
				<div id="vinci">Da Vinci University</div>
				<div id="learn">Learning never exhausts the mind</div>
			</div>

			<div id="flag">
				<a href="indexit.php"><img src="img/it_flag.png" alt="italian flag"></a>
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li id="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<article>
				<h2>Study international at<br>Da Vinci University</h2>
				<p>
					Da Vinci University offers you an international studying environment to complete your studies with students from over 50 different countries all over the world. Every year dozens of students complete their bachelor's or master's program in one of our international courses. 
				</p>
				<p>
					Your diploma in Technical Engineering, Information Technology, Electronic Music or Building Classical Instruments will be acknowledged worldwide and you have good chances starting your career in a multinational company.
				</p>
			</article>
			<article class="dualbox">
				<div class="indexbox" id="campusbox">
					<a href="about.php">
						<div class="overlay">
							<p>Da Vinci<br>University</p>
						</div>
					</a>
				</div>
				<div class="indexbox" id="coursebox">
					<a href="courses.php">
						<div class="overlay">
							<p>Courses</p>
						</div>
					</a>
				</div>			
			</article>
			<article>
				<h2>More than just a Number</h2>
				<p>
				At Da Vinci University students works in close surroundings to their lecturers and are treated equal and with respect. Each day there is a specified time where students can consult their lecturers with study related and personal matters.
				</p>

				<p>
				Every period students also have to complete a project in a small working group. This does not only only improve the learning success, but also the social skills and leads to a social learning environment through your studies. 
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
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="contact.html">Contact</a></li>
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