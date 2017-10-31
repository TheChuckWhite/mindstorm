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
				<img src="img/it_flag.png" alt="italian flag">
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.php">Contact</a></li>

			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			

			<article>
				<h2>Opening hours</h2>
				<div class="contents">	
					<div id="days">
						<ul>
							<li>Monday</li>
							<li>Tuesday</li>
							<li>Wednesday</li>
							<li>Thursday</li>
							<li>Friday</li>
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
					During weekends and public holidays Da Vinci University is closed.
				</p>
				<p>
				<h2> Contact details </h2>
			
					<ul>
						<li>Telephone number: +31 (0)88 019 3789 </li>
						<li>E-mail address: internationaloffice@davinciuniversity.nl </li>
					</ul>
				</p>
			</article>
			<article>
				<h2>Have any questions?</h2>
				<p>We answer as many questions as we can on our website. If you have any questions that you feel are not answered on our website, feel free to contact us! You can send us your questions by sending an e-mail to internationaloffice@davinciuniversity.nl or by completing the form below.
				</p>
				<div class="form">
                            <?php

                            if (isset($_POST['submit']))
                            {
                                $text = $_POST['text'];
                                if (!empty($text))
                                {
                                    echo '<font color="red"><font size="20">*Thank you for the interest in our university! We will try to answer them as soon as possible!</font>';
                                } else
                                {
                                    echo '<font color="red">*Complete all the empty fields!</font>';
                                }
                            }
                            ?>
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <p>
                                    <label>Name</label>
                                    <textarea placeholder="Name" name="text"></textarea>
                                </p>
                                <p>
                                    <label>E-mail</label>
                                    <textarea placeholder="E-mail" name="text"></textarea>
                                </p>
                                <p>
                                    <label>Questions</label>
                                    <textarea placeholder="Questions" name="text" id="comment"></textarea>
                                </p>
                                <p>
                                    <input type="submit" value="Submit" name="submit"> 
                                </p>
                            </form> 

                        </div>
			</article>
			<article>

				<h2>Where can you find us?</h2>
				<p>	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77226.35012579599!2d6.835303946248105!3d52.78047556573554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7e622998cc89d%3A0xbf2c3709eb35b55b!2sEmmen!5e0!3m2!1sro!2snl!4v1508491031723" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</p>
				

			</article>
		</div>
		<aside>
			<div>
				Newsfeed
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
					<li>Home</li>
					<li>About</li>
					<li>Courses</li>
					<li>Events</li>
					<li>News</li>
					<li>Contact</li>

				</ul>
			</div>
			<div class="footBox">
				<h3>Open Day Registration</h3>
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
