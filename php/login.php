<?php
session_start();
$correctCredentials = file_get_contents("logincredentials.txt");

if(isset($_POST['logMeIn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usedCredentials = $username.",".$password;

    //wrong credentials are entered
    if($usedCredentials !== $correctCredentials){
        $_SESSION["loggedIn"] = "false";
        $_SESSION["stringText"] = "true";
        header("location:javascript://history.go(-1)");
        die();
    }
    echo "right";
    $_SESSION["loggedIn"] = "true";
    $_SESSION["stringText"] = "false";
}