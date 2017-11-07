<?php
session_start();

if(!isset($_SESSION["loggedIn"])){
   header('Location: login.php');
}
if(isset($_POST['delete'])){
    unlink('uploads/unapproved/'.$_POST['image']);
}
if(isset($_POST['approve'])){
    $image = $_POST['image'];
    rename("uploads/unapproved/".$image, "uploads/approved/".$image);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Da Vinci University</title>

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

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
            <p>Admin Panel</p>
        </div>
    </header>

    <div class="wrapper">
        <article>
            <?php
            if(!empty(array_diff(scandir('uploads/unapproved/'), array('..', '.')))){
                foreach( array_diff(scandir('uploads/unapproved/'), array('..', '.')) as $image){
                    echo"
                <div>
                    <img src='uploads/unapproved/".$image."' alt='".$image."'>
                    <form action='admin.php' method='POST'>
                        <input type='submit' name='approve' value='Approve'>
                        <input type='submit' name='delete' value='Delete'>
                        <input type='hidden' name='image' value='".$image."'>
                    </form>
                </div>
                ";
                }
            }
            else{
                echo "No images to show";
            }

            ?>
        </article>
    </div>
</body>
</html>