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
    <link rel="stylesheet" type="text/css" href="css/photos.css">


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
                <a href="photosit.php"><img src="img/it_flag.png" alt="italian flag"></a>
            </div>
            <div id="login">
                <a href="login.php">Login</a>
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
                <li><a href="contact.php">Contact</a></li>
                <li class="active"><a href="photos.php">Photos</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrapper">
        <div class="content">
            <article class="shorter">
                <form action="php/upload.php" method="POST" enctype="multipart/form-data">
                    <p>Upload your picture here</p>
                    <p class="small">Your picture will first be checked before it is uploaded</p>
                    <input type="file" name="image">
                    <input type="submit" value="Upload Image" name="upload">
                </form>
            </article>
            <article>
                <?php
                foreach( array_diff(scandir('uploads/approved/'), array('..', '.')) as $image){
                    echo"
                        <div>
                             <img src='uploads/approved/".$image."' alt='".$image."'>
                        </div>
                    ";
                }
                ?>
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