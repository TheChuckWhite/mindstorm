<?php
require_once("conn.php");

$stmt = "SELECT * FROM news";
$newsitems = $conn-> query($stmt);



?>