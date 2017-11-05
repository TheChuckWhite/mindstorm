<?php
session_start();
session_destroy();
session_start();
$username = "admin";
$password = "secret123";
$failed = false;

if(isset($_POST['logMeIn'])){

    //credentials are entered
    if($username == $_POST['username'] && $password == $_POST['password']){
        $_SESSION["loggedIn"] = true;
        header("Location: admin.php");
        exit();
    }

    $failed = true;
}
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
        <div class="headWrap">
            <a href="index.php"><div class="logo">
                <img src="img/logo.png">
                <div class="vinci">Da Vinci University</div>
                <div class="learn">Learning never exhausts the mind</div>
            </div></a>

        </div>
    </header>

    <div class="wrapper">
        <article class="shorter">
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="*****">

                <input type="submit" name="logMeIn" value="Login">
            </form>
            <span id="text_wrong"><?php if($failed == true){echo "Login credentials wrong";} ?></span>
        </article>
    </div>
</body>
</html>