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

	<link rel="stylesheet" type="text/css" href="css/courses.css">

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
				<a href="coursesit.php"><img src="img/it_flag.png" alt="italian flag"></a>
			</div>
		</div>
	</header>
	<div class="navWrap">
		<nav>
			<ul>	
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="active"><a href="courses.php">Courses</a></li>
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
				<div class="banner" id='generalRequirements'>
					<div class="overlayNoTransition">
						<p>General requirements</p>
					</div>
				</div>
				<h2>Application Deadlines</h2>
				<p><b>September Start</b></p>
				<p>EU/EER Applicants: 15 August
				<br>Non-EU Applicants: 31 May</p>
				<p><b>February Start</b></p>
				<p>EU/EER Applicants: 17 January
				<br>Non-EU Applicants: 31 October</p>
				<p>
					What we care about the most is your motivation. We suggest you spend a reasonable amount of time writing your motivational letter. Also as the course is in English you are expected to have your English test passed. Below you can see the list of English tests that are acceptable.
				</p>
				<h2>English requirements</h2>
				<p>
					An <b>IELTS</b> score of at least <b>5.0</b> or <b>TOEFL</b> scores of <b>500</b> (paper-based),<b>173</b> (computer-based) or <b>60</b> (internet-based) or a <b>Cambridge ESOL score FCE-C.</b>
					<br><br><b>High school graduation diploma</b> from an accredited institution.
				<br><br></p>
				
				</article>

				<article>
				<div class="banner" id='howToApply'>
					<div class="overlayNoTransition">
						<p>How to apply</p>
					</div>
				</div>
				<h2>Application procedure</h2>
					<ul>
						<li>	<b>Step 1</b> -	Check the General requirements	</li>
						<li>	<b>Step 2</b> -	Register on Studielink      	</li>
						<li>	<b>Step 3</b> - Submit application documents	</li>
						<li>	<b>Step 4</b> - Finalise your application    	</li>
					</ul>				
			</article>
				
			<article>
				<div class="banner" id='electricalEngineering'>
					<div class="overlayNoTransition">
						<p>Electrical engineering</p>
					</div>
				</div>
				<h2>Introduction</h2>
				<p>
					The Bachelor's course in Electrical Engineering in Da Vinci University will give you a great start in this exciting field. With our great team of teachers, you'll grow your knowledge in the field of Electrical Engineering. You can start the study with no prior knowledge and our experienced team will guide you through the course answering all of your questions.
				</p>
				<h2>Content</h2>
				<ul>
					<li>
						<b>Year one</b> - foundation phase. In the first half, you'll get to know the field of Electrical engineering gets used to the study load.
					</li>
					<li>
						<b>Year two</b> - the focus is shifted more towards the specific subjects in the study: embedded systems and power systems.
					</li>
					<li>
						<b>Year three</b> - this year you'll get to experience the field by going on an internship.
					</li>
					<li>
						<b>Year four</b> - you'll go on an exchange course - you can choose the country of interest.
					</li>
				</ul>
				<h2>Career prospects </h2>
				<p>
					After you complete the course you can work in the field of Electrical engineering as a quality, software and or hardware engineer, a systems analyst and much more.<br><br>
				</p>
			</article>
			<article>
				<div class="banner" id='informationTechnology'>
					<div class="overlayNoTransition">
						<p>Information technology</p>
					</div>
				</div>
				<h2>Introduction</h2>
				<p>
					The Bachelor's course in Information technology in Da Vinci University will give you a great start in this exciting field. With our great team of teachers, you'll grow your knowledge in the field of Information technology. You can start the study with no prior knowledge and our experienced team will guide you through the course answering all of your questions.
				</p>
				<h2>Content</h2>
				<ul>
					<li>
						<b>Year one</b> - foundation phase. In the first half, you'll get to know the field of Information technology gets used to the study load.
					</li>
					<li>
						<b>Year two</b> - the focus is shifted more towards the specific subjects in the study: software engineering and databases.
					</li>
					<li>
						<b>Year three</b> - this year you'll get to experience the field by going on an internship.
					</li>
					<li>
						<b>Year four</b> - you'll go on an exchange course - you can choose the country of interest.
					</li>
				</ul>
				<h2>Career prospects</h2>
				<p>
					After you complete the course you can work in the field of Information technology as a software engineer, a cloud architect, a computer forensic investigator and much more.

				<br><br></p>
			</article>


			<article>
				<div class="banner" id='electronicMusic'>
					<div class="overlayNoTransition">
						<p>Electronic music</p>
					</div>
				</div>
				<h2>Introduction</h2>
				<p>
					The Bachelor's course in Electronic music in Da Vinci University will give you a great start in this exciting field. With our great team of teachers, you'll grow your knowledge in the field of Electronic music. You can start the study with no prior knowledge and our experienced team will guide you through the course answering all of your questions.
				</p>
				<h2>Content</h2>
				<ul>					
					<li>
						<b>Year one</b> - foundation phase. In the first half, you'll get to know the field of Electronic music gets used to the study load.
					</li>
					<li>
						<b>Year two</b> - The focus is shifted more towards the specific subjects in the study.
					</li>
					<li>
						<b>Year three</b> - this year you'll get to experience the field by going on an internship.
					</li>
					<li>
						<b>Year four</b> - you'll go on an exchange course - you can choose the country of interest.
					</li>
				</ul>
				<h2>Career prospects</h2>
				<p>
					After you complete the course you can go ahead with your career in the fields of the arts.
				<br><br></p>
			</article>
			
			<article>
				<div class="banner" id='classicalInstruments'>
					<div class="overlayNoTransition">
						<p>Building Classical Instruments</p>
					</div>
				</div>
				<h2>Introduction</h2>
				<p>
					The Bachelor's course in Classical instruments in Da Vinci University will give you a great start in this exciting field. With our great team of teachers, you'll grow your knowledge in the field of Classical instruments. You can start the study with no prior knowledge and our experienced team will guide you through the course answering all of your questions.
				</p>
				<h2>Content</h2>
			
				<ul>
					<li>
						<b>Year one</b> -foundation phase. In the first half, you'll get to know the field of Classical instruments gets used to the study load and learn the basics of building a classical guitar.
					</li>
					<li>
						<b>Year two</b> - the focus is shifted more towards acoustics.
					</li>
					<li>
						<b>Year three</b> - this year you'll get to experience the field by going on an internship.
					</li>
					<li>
						<b>Year four</b> - you'll go on an exchange course - you can choose the country of interest.
					</li>
				</ul>	
				
				<h2>Career prospects</h2>
				<p>
					After you complete the course you can work as a classical instrument craftsman.
				<br><br></p>
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