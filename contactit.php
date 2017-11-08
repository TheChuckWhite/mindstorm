<?php
define("IN_PAGE", true);
$lang = "it";
$news = include "newsfeed/newsReader.php";

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
				<img src="img/logo.png">
				<div class="vinci">Da Vinci University</div>
				<div class="learn">Learning never exhausts the mind</div>
			</div>

			<div class="flag">
                <a href="contact.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
			</div>
		</div>
	</header>
	<div class="navWrap">
		<nav>
			<ul>	
				<li><a href="indexit.php">Home</a></li>
				<li><a href="aboutit.php">Su di noi</a></li>
				<li><a href="coursesit.php">Corsi</a></li>
				<li><a href="eventsit.php">Eventi</a></li>
				<li><a href="newsit.php">Novità</a></li>
				<li class="active"><a href="contactit.php">Contatti</a></li>
                <li><a href="photosit.php">Fotografie</a></li>

			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div class="content">
			<article>
				<h2>Orari di aperutra</h2>
				
				<table>
					<tr>
						<td>Lunedì</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Martedì</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Mercoledì</td>
						<td>8:00 - 18:30</td>
					</tr>
					<tr>
						<td>Giovedì</td>
						<td>8:00 - 19:30</td>
					</tr>
					<tr>
						<td>Venerdì</td>
						<td>8:00 - 16:30</td>
					</tr>
				</table>
				<p>
					Durante i fine-settimana e le vancanze nazionali la Da Vinci University resterà chiusa.
				</p>
				
				<h2> Contatti </h2>
				<p>
					Numero di telefono: +31 (0)88 019 3789
					Indirizo e-mail: internationaloffice@davinciuniversity.nl
				</p>
			</article>
			<article>
				<h2>Hai delle domande?</h2>
				<p>
					Rispondiamo al maggior numero di domande possibili sul nostro sito. Sa hai delle domande che pensi non possano essere risposte sul sito, sei libero di contattarci! Puoi mandarci le tue domande alla mail di internationaloffice@davinciuniversity.nl o compilando il modulo qui sotto.
				</p>
                            <?php
                            if (isset($_POST['submit']))
                            {
                                $text = $_POST['text'];
                                if (!empty($text))
                                {
                                    echo '<font color="red">*Grazie del feedback!</font>';
                                } else
                                {
                                    echo '<font color="red">*Per favore riempi tutti i campi!</font>';
                                }
                            }
                            ?>

                            <form action="contact.php" method="POST">
		                        <p>
		                            <label>Nome</label>
		                            <input type="text" name="name">
		                        </p>
		                        <p>
		                            <label>E-mail</label>
		                            <input type="text" name="email">
		                        </p>
		                        <p>
		                            <label>Domande</label>
		                            <textarea name="text" id="comment"></textarea>
		                        </p>
		                        <p>
		                            <input id="submit" type="submit" value="Submit" name="submit"> 
		                        </p>
		                    </form> 
			</article>
			<article>
				<h2>Dove puoi trovarci?</h2>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77226.35012579599!2d6.835303946248105!3d52.78047556573554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e622998cc89d%3A0xbf2c3709eb35b55b!2sEmmen!5e0!3m2!1sro!2snl!4v1508491031723" width="625" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</article>
			</div>
		<aside>
            <div>
                <?php foreach($news as $newsItem){ ?>
                    <div class="newsitem_sidebar">
                        <h3><a href="newsit.php"><?= substr($newsItem->title, 0, 40) ?>...</a></h3>
                        <p class="desc">
                            <?= substr($newsItem->description, 0, 100) ?>...
                        </p>
                    </div>
                <?php } ?>
                <a href="newsfeed/newsReader.php?lang=<?= $lang ?>" target="_blank"><img src="img/rss.png" alt="rss"></a>
            </div>
            <div class="weather">
                <h3>Tempo in Emmen</h3>
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
                <h3>Dove siamo</h3>
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
                <h3>Iscriviti al Open Day</h3>
				<form id="openDay" action="opendayit.php" method="post">
					<input type="text" name="name" placeholder="Nome">
					<input type="text" name="mail" placeholder="E-Mail">
					<input id="openDaySubmit" type="submit" name="submit" value="Sottoscrivi">
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
