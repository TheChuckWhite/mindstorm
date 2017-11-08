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
	<link rel="stylesheet" type="text/css" href="css/contact.css">

	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<div class="headWrap">
			<div class="logo">
				<img src="img/logo.png" alt="logo">
				<div class="vinci">Da Vinci University</div>
				<div class="learn">Learning never exhausts the mind</div>
			</div>

			<div class="flag">
                <a href="contactit.php"><img src="img/it_flag.png" alt="italian flag"></a>
			</div>
		</div>
	</header>
	<div class="navWrap">
		<nav>
			<ul>	
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="news.php">News</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
                <li><a href="photos.php">Photos</a></li>

			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div class="content">
			

			<article>
				<h2>Opening hours</h2>

				<table>
					<tr>
						<td>Monday</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Tuesday</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Thursday</td>
						<td>8:00 - 19:30</td>
					</tr>
					<tr>
						<td>Friday</td>
						<td>8:00 - 16:30</td>
					</tr>
				</table>
				<p>
					During weekends and public holidays Da Vinci University is closed.
				</p>
				<h2> Contact details </h2>
				<p>
						Telephone number: +31 (0)88 019 3789 <br>
						E-mail address: internationaloffice@davinciuniversity.nl
				</p>
			</article>
			<article>
				<h2>Have any questions?</h2>
				<p>We answer as many questions as we can on our website. If you have any questions that you feel are not answered on our website, feel free to contact us! You can send us your questions by sending an e-mail to internationaloffice@davinciuniversity.nl or by completing the form below.
				</p>
                    <?php
                        if (isset($_POST['submit']))
                        {
                            $text = $_POST['text'];
                            if (!empty($text))
                            {
                                echo '<font color="red">*Thank you for the interest in our university! We will try to answer them as soon as possible!</font>';
                            } else
                            {
                                echo '<font color="red">*Complete all the empty fields!</font>';
                            }
                        }
                    ?>
                    <form action="contact.php" method="POST">
                        <p>
                            <label>Name</label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <label>E-mail</label>
                            <input type="text" name="email">
                        </p>
                        <p>
                            <label>Questions</label>
                            <textarea name="text" id="comment"></textarea>
                        </p>
                        <p>
                            <input id="submit" type="submit" value="Submit" name="submit"> 
                        </p>
                    </form> 
			</article>

			<article>
				<h2>Where can you find us?</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77226.35012579599!2d6.835303946248105!3d52.78047556573554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e622998cc89d%3A0xbf2c3709eb35b55b!2sEmmen!5e0!3m2!1sro!2snl!4v1508491031723" width="625" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
