<?php
define("IN_PAGE", true);
$lang = "it";
$news = include "newsfeed/newsReader.php";

include"php/weather.php";
?>
<!DOCTYPE html>
<html lang="it">
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
		<div class="headWrap">
			<div class="logo">
				<img src="img/logo.png" alt="logo">
				<div class="vinci">Da Vinci University</div>
				<div class="learn">Learning never exhausts the mind</div>
			</div>

			<div class="flag">
				<a href="index.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
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
				<li><a href="contactit.php">Contatti</a></li>
                <li><a href="photosit.php">Fotografie</a></li>
			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div class="content">
			<article>
				<h2>Iscriviti al Open Day</h2>

				<?php
					if (isset($_POST['name']) && isset($_POST['mail']) && !empty($_POST['name']) && !empty($_POST['mail'])) {
						$name = $_POST['name'];
						$mail = $_POST['mail'];

						if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						 	echo "Successo! Lei è stato registrato per il prossimo giorno aperto.";
						 } 
						
						else{
							echo "Inserisci una e-mail valida e prova nuovamente in basso.";
						}
					}

					else{
						echo "Inserisci nome e posta elettronica e prova nuovamente in basso.";
					}
				?>
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
					<li><a href="indexit.php">Home</a></li>
					<li><a href="aboutit.php">Su di noi</a></li>
					<li><a href="coursesit.php">Corsi</a></li>
					<li><a href="eventsit.php">Eventi</a></li>
					<li><a href="newsit.php">Novità</a></li>
					<li><a href="contactit.html">Contatti</a></li>
                    <li><a href="photosit.php">Fotografie</a></li>
				</ul>
			</div>
			<div class="footBox">
				<h3>Iscriviti al Open Day</h3>
				<form class="openDay" action="opendayit.php" method="post">
					<input type="text" name="name" placeholder="Nome">
					<input type="text" name="mail" placeholder="E-Mail">
					<input class="openDaySubmit" type="submit" name="submit" value="Sottoscrivi">
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