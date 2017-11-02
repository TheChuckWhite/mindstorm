<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Da Vinci University</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

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
    </div>
</header>

<div class="wrapper">
    <article class="shorter">
        <form action="php/login.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="*****">

            <input type="submit" name="logMeIn" value="Login">
        </form>
        <span id="text_wrong"><?php if($_SESSION['stringText'] = "true"){echo "Login credentials wrong";} ?></span>
    </article>
</div>
</body>
</html>