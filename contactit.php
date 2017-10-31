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
        <style>
            .contact
{
	font-size: 28px;
	margin-bottom: 15px;
}
.contents
{
	font-size: 18px;
	width: 100%;
	text-align: justify;
	float: left;
	margin-top: 10px;
}

label 
{
    display:block;
    margin-top:20px;
    letter-spacing:2px;
    margin-bottom: 10px;
    text-align: left;
    margin-left: 10px;
}
textarea 
{
	width:439px;
	height:50px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
	resize: none;
        margin-left: 10px;
	
	
}
input
{
	margin-left: 370px;
	margin-top: 10px;
	height: 40px;
	border-radius: 10px;
	padding:10px;
	font-size:18px;
	color:#3a3a3a;

}
#comment
{
	height: 70px;
}
.form
{
	margin-top: 10px;	
}
#days,#hours
{
	float: left;
	margin-right: 30px;
}
li
{
	margin-bottom: 10px;
}
#blank
{
	float: left;
	height: 40px;
	width: 100%;
}
        </style>
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
                <a href="contact.php"><img src="img/uk_flag.png" alt="brittish flag"></a>
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li><a href="indexit.html">Home</a></li>
				<li><a href="aboutit.html">Su di noi</a></li>
				<li><a href="coursesit.html">Corsi</a></li>
				<li><a href="eventsit.html">Eventi</a></li>
				<li><a href="newsit.html">Novità</a></li>
				<li id="active"><a href="contactit.php">Contatti</a></li>

			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<article>
				<h2>Orari di aperutra</h2>
				<div class="contents">	
					<div id="days">
						<ul>
							<li>Lunedì</li>
							<li>Martedì</li>
							<li>Mercoledì</li>
							<li>Giovedì</li>
							<li>Venerdì</li>
						</ul>
					</div>
					<div id="hours">
						<ul>
							<li>8:00 - 18:30 </li>
							<li>8:00 - 18:30 </li>
							<li>8:00 - 18:30 </li>
							<li>8:00 - 19:30 </li>
							<li>8:00 - 16:30 </li>
						</ul>
					</div>
				</div>
				<p>
					Durante i fine-settimana e le vancanze nazionali la Da Vinci University resterà chiusa.
				</p>
				<p>
				<h2> Contatti </h2>
			
					<ul>
						<li>Numero di telefono: +31 (0)88 019 3789 </li>
						<li>Indirizo e-mail: internationaloffice@davinciuniversity.nl </li>
					</ul>
				</p>
			</article>
			<article>
				<h2>Hai delle domande?</h2>
				<p>
					Rispondiamo al maggior numero di domande possibili sul nostro sito. Sa hai delle domande che pensi non possano essere risposte sul sito, sei libero di contattarci! Puoi mandarci le tue domande alla mail di internationaloffice@davinciuniversity.nl o compilando il modulo qui sotto.
				</p>
				<div class="form">
                            <?php
                            $text = $_POST['text'];
                            if (isset($_POST['submit']))
                            {
                                if (!empty($text))
                                {
                                    echo '<font color="red">*Grazie del feedback!</font>';
                                } else
                                {
                                    echo '<font color="red">*Per favore riempi tutti i campi!</font>';
                                }
                            }
                            ?>
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <p>
                                    <label>Nome</label>
                                    <textarea placeholder="Nome" name="text"></textarea>
                                </p>
                                <p>
                                    <label>E-mail</label>
                                    <textarea placeholder="E-mail" name="text"></textarea>
                                </p>
                                <p>
                                    <label>Domande</label>
                                    <textarea placeholder="Domande" name="text" id="comment"></textarea>
                                </p>
                                <p>
                                    <input type="submit" value="Submit" name="submit"> 
                                </p>
                            </form> 

                        </div>
			</article>
			<article>

				<h2>Dove puoi trovarci?</h2>
				<p>	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77226.35012579599!2d6.835303946248105!3d52.78047556573554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e622998cc89d%3A0xbf2c3709eb35b55b!2sEmmen!5e0!3m2!1sro!2snl!4v1508491031723" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</p>
				

			</article>
			</div>
		<aside>
			<div>
				<div class="newsitem_sidebar">
					<h3>DU received qualification</h3>
					<p class="desc">In 2017 DaVinci University received the top qualification in the HBO Selection Guide.</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>Jump-start your job search</h3>
					<p class="desc">In DaVinci University’s series “Jump-start Your Job Search,” DaVinci University brings you short interviews with companies linked to your education.</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>DU student won the Luthier price</h3>
					<p class="desc">8349 people joined this year's race against the clock to make the perfect stringed instrument in 1 week, working on their instrument 5 hours a day</p>
				</div>
			</div>
			<div>
				Previsioni
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
					<li><a href="indexit.html">Home</a></li>
					<li><a href="aboutit.html">Su di noi</a></li>
					<li><a href="coursesit.html">Corsi</a></li>
					<li><a href="eventsit.html">Eventi</a></li>
					<li><a href="newsit.html">Novità</a></li>
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
			<span>Da Vinci University</span>
		</div>
			
	</div>
</body>
</html>
