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

	<link rel="stylesheet" type="text/css" href="css/courses.css">

	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

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
				<a href="courses.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li><a href="indexit.php">Home</a></li>
				<li><a href="aboutit.php">Su di noi</a></li>
				<li id="active"><a href="coursesit.php">Corsi</a></li>
				<li><a href="eventsit.php">Eventi</a></li>
				<li><a href="newsit.php">Novità</a></li>
				<li><a href="contactit.php">Contatti</a></li>
			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<article>
				<div class="banner" id='generalRequirements'>
					<div class="overlayNoTransition">
						<p>General requirements</p>
					</div>
				</div>
				<h2>Scadenza per l'applicazione</h2>
				<p><b>Inizio di Settembre</b></p>
				<p>Candidati EU/EER: 15 Agosto
				<br>Candidati Non-EU: 31 Maggio</p>
				<p><b>Inizio di Febbraio</b></p>
				<p>Candidati EU/EER: 17 Gennaio
				<br>Candidati Non-EU: 31 Ottobre</p>
				<p>
					Quello che ci importa di più è la tua motivazione. Ti suggeruamo di investire una buona quantità di tempo per scrivere la tua lettera motivazionale. Inoltre, dato che i corsi sono in Inglese, ci aspettiamo che tu abbia passato i tuoi test di Inglese. In passo puoi vedere una lista di test di Inglese accettabili.
				</p>
				<h2>Requisiti di Inglese</h2>
				<p>
					Un risultato <b>IELTS</b> di almeno <b>5.0</b> o un risultato <b>TOEFL</b> di <b>500</b> (su carta),<b>173</b> (su computer) o <b>60</b> (su internet) o anche un risultato <b>Cambridge ESOL</b> di <b>FCE-C</b>.
					<br><br><b>Diploma di Maturità</b> distribuito da un istituto qualificato.
				<br><br></p>
				
</article>

				<article>
				<div class="banner" id='apply'>
					<div class="overlayNoTransition">
						<p>Come Iscriversi</p>
					</div>
				</div>
				<h2>Procedure di iscrizione</h2>
				<br><p><b>Step 1</b> -	Controllare i requisiti generali		</p>
				<br><p><b>Step 2</b> -	Registrarsi su Studielink     		 	</p>
				<br><p><b>Step 3</b> - 	Inoltrare i documenti per l'iscrizione	</p>
				<br><p><b>Step 4</b> - 	Finalizare la propria applicazione    	</p><br>
				</article>
				
			<article>
				<div class="banner" id='electricalEngineering'>
					<div class="overlayNoTransition">
						<p>Ingegneria Elettronica</p>
					</div>
				</div>
				<h2>Introduzione</h2>
				<p>
					Il corso di Ingegneria Elettronica alla Da Vinci University ti darà un ottimo inizio in questo emozionante campo. Con la nostra squadra di insegnante, espanderai le tue conoscenze nel campo dell'Ingegneria Elettronica. Puoi iniziare gli studi senza alcuna conoscenza precedente e il nostro team ti guidera attraverso il corso rispondendo a tutte le tue domande.
				</p>
				<h2>Contenuti</h2>
				<ul>
					<li><b>Primo anno</b> - Fase iniziale. Nella prima metà inizierai a conoscere il campo dell'Ingegneria Elettronica e ti abbituerai alla mole di studio.</li>
					<li><b>Secondo anno</b> - L'attenzione si sposta su materie di studio specifiche: sistemi integrati e sistemi di potenza.</li>
					<li><b>Terzo anno</b> - Durante questo anno otterai esperienza sul campo in un tirocini<li>
					<li><b>Quarto anno</b> - Andrai in uno scambio interculturale - puoi scegliere la nazione di interes<li>
				</ul>
				<h2>Prospettive di Carriera</h2>
				<p>
					Dopo il completamento del corso potrai lavorare nel campo dell'Ingegneria Elettronica come ingegnere di qualità, dei software o degli hardware, analista di sistemi e molto altro.
				<br><br></p>
			</article>
			<article>
				<div class="banner" id='informationTechnology'>
					<div class="overlayNoTransition">
						<p>Ingegneria Informatica</p>
					</div>
				</div>
				<h2>Introduzione</h2>
				<p>
					Il corso di Ingegneria Informatica alla Da Vinci University ti darà un ottimo inizio in questo emozionante campo. Con la nostra squadra di insegnante, espanderai le tue conoscenze nel campo dell'Ingegneria Elettronica. Puoi iniziare gli studi senza alcuna conoscenza precedente e il nostro team ti guidera attraverso il corso rispondendo a tutte le tue domande.
				</p>
				<h2>Contenuti</h2>
				<ul>
					<li><b>Primo anno</b> - Fase iniziale. Nella prima metà inizierai a conoscere il campo dell'Ingegneria Elettronica e ti abbituerai alla mole di studio. </li>
					<li><b>Secondo anno</b> - L'attenzione si sposta su materie di studio specifiche: ingegneria del software e database.</li>
					<li><b>Terzo anno</b> - Durante questo anno otterai esperienza sul campo in un tirocinio. </li>
					<li><b>Quarto anno</b> - Andrai in uno scambio interculturale - puoi scegliere la nazione di interesse.</li>
				</ul>
				<h2>Prospettive di Carriera</h2>
				<p>
					Dopo il completamento del corso potrai lavorare nel campo dell'Ingegneria informatica come ingegnere dei software, architetto del cloud, investigstore forense informatico e molto altro.
				<br><br></p>
			</article>


			<article>
				<div class="banner" id='electronicMusic'>
					<div class="overlayNoTransition">
						<p>Musica Elettronica</p>
					</div>
				</div>
				<h2>Introduzione</h2>
				<p>
					Il corso di Musica Elettronia alla Da Vinci University ti darà un ottimo inizio in questo emozionante campo. Con la nostra squadra di insegnante, espanderai le tue conoscenze nel campo della Musica Elettronica. Puoi iniziare gli studi senza alcuna conoscenza precedente e il nostro team ti guidera attraverso il corso rispondendo a tutte le tue domande.
				</p>
				<h2>Contenuti</h2>
				<ul>
					<li><b>Primo anno</b> - Fase iniziale. Nella prima metà inizierai a conoscere il campo dell'Ingegneria Elettronica e ti abbituerai alla mole di studio. </li>
					<li><b>Secondo anno</b> - L'attenzione si sposta su materie di studio specifiche.</li>
					<li><b>Terzo anno</b> - Durante questo anno otterai esperienza sul campo in un tirocinio. </li>
					<li><b>Quarto anno</b> - Andrai in uno scambio interculturale - puoi scegliere la nazione di interesse.</li>
				</ul>
				<h2>Prospettive di Carriera</h2>
				<p>
					Dopo il completamento del corso potrai andare avanti con la tua carriera e lavorare nell'emozionante mondo delle arti.
				<br><br></p>
			</article>
			
			<article>
				<div class="banner" id='classicalInstruments'>
					<div class="overlayNoTransition">
						<p>Strumeti Classici</p>
					</div>
				</div>
				<h2>Introduzione</h2>
				<p>
					Il corso di Strumeti Classici alla Da Vinci University ti darà un ottimo inizio in questo emozionante campo. Con la nostra squadra di insegnante, espanderai le tue conoscenze nel campo degli Strumenti Classici. Puoi iniziare gli studi senza alcuna conoscenza precedente e il nostro team ti guidera attraverso il corso rispondendo a tutte le tue domande.
				</p>
				<h2>Contenuti</h2>
				<ul>
					<li><b>Primo anno</b> - Fase iniziale. Nella prima metà inizierai a conoscere il campo dell'Ingegneria Elettronica e ti abbituerai alla mole di studio. </li>
					<li><b>Secondo anno</b> - L'attenzione si sposta maggiormente sull'acustica.</li>
					<li><b>Terzo anno</b> - Durante questo anno otterai esperienza sul campo in un tirocinio. </li>
					<li><b>Quarto anno</b> - Andrai in uno scambio interculturale - puoi scegliere la nazione di interesse.</li>
				</ul>
				<h2>Prospettive di Carriera</h2>
				<p>
					Dopo il completamento del corso potrai lavorare come un artigiano di strumenti classici.
				<br><br></p>
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
				</ul>
			</div>
			<div class="footBox">
				<h3>Registrati al Open Day</h3>
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