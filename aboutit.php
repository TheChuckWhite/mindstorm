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
				<a href="about.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
			</div>
		</div>
	</header>
	<div class="navWrap">
		<nav>
			<ul>	
				<li><a href="indexit.php">Home</a></li>
				<li class="active"><a href="aboutit.php">Su di noi</a></li>
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
				<h2>Su Da Vinci University</h2>
				<p>
					Quando arriverai alla nostra università vedrai subito che si incarna perfettamente il significato del suo nome. Siamo come Da Vinci - uniamo varie discipline in un unico luogo, portiamo tutto insieme e lo facciamo lavorare come una macchina ben costruita.
				</p>

			</article>

			<article>
				<h2>Il Nostro Logo</h2>
				<p>
					Il nostro logo è un modello virtuale del famoso uomo Vitruviano di Da Vinci. Come si sa, l'uomo Vitruviano è una rappresentazione visiva dei canoni della proporzione. L'uomo e l'architettura si uniscono perfettamente insieme in un'unica immagine della proporzione del tutto. Così come la nostra univerità - uniamo uomo e disciplina, portando insime le due e dandosi il meglio a vicenda.
				</p>

			</article>

			<article>
				<h2>Facoltà Della Da Vinci University</h2>
				<p>
					La nostrà univerità ha al momento due location. Situata in Emmen e Groningen. Entrambe le location sono completamente aperte a tutti gli studenti della Da Vinci University, a prescindere dal campus di appartenenza. Perciò, grazie alla poca distanza tra le due, tutti gli studenti sono i benvenuti a usare le apparechiature da entrambi i campus.
				</p>

			</article>

			<article>
				<h2>Corsi Disponibili</h2>
				<p>
					La nostra univerità fornisce una varietà di corse tra cui scegliere. Per i più tecnici abbiamo il corso di Ingegneria Elettronica. Per quelli ansiosi di sapere tutto abbiamo Ingegneria Informatica. Per i romantici creatori abbiamo un corso di Costruzione di Strumenti Classici. E, ovviamete, possiamo accomodare i più vivaci e tecno-friendly studenti con il nostro corso di Musica Elettronica.
					<p id="coursesBtn"><a href="coursesit.php"><input type="button" name="coursesBtn" value="Courses"></a></p>
				</p>

			</article>

			<article>
				<h2>Stile di Apprendimento</h2>
				<p>
					Per la nostra univerità abbiamo scelto un diverso modo per ottenere le abbilità e l'educazione. Abbiamo deciso che il modo migliore di preparare gli studenti al mondo reale fosse quello di dargli dei punti di vista sia pratici che teorici. Questo significa che, apparte i nostri labboratori più pratici, abbiamo anche un programma basato sull'apprendimento, dove gli studenti prendono un caso e, grazie ad approcci teoretici, provano a trovare una soluzione.
				</p>

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
				<h3>Locations</h3>
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
				<h3>Registrati al Open Day</h3>
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