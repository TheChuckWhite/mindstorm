<?php
if(!isset($_FILES['image'])){
    die("Image couldn't be uploaded");
}

$target_dir = "../uploads/unapproved/";
//not actually uploaded, reference to what we want it to be
$uploaded_file = $target_dir . basename($_FILES['image']['name']);

$extension = pathinfo($uploaded_file,PATHINFO_EXTENSION);
$fileName = $target_dir . time() . '.' .  $extension;

$check = @getimagesize($_FILES["image"]["tmp_name"]);


if($check == false) {
    die('Please upload a valid image');
}
if ($_FILES["image"]["size"] > 10000000) {
    die('Image size is too large');
}
if (!move_uploaded_file($_FILES["image"]["tmp_name"], $fileName)) {
   die("Image couldn't be uploaded.");
}

header('Location: ../photos.php');