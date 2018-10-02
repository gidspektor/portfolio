<?php
require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$bio_push = $_POST['bio'];
$life_now_push = $_POST['life_now'];
$goals_push = $_POST['goals'];

$proj1_img = $_POST['proj1_img'];
$proj1_url = $_POST['proj1_url'];
$proj2_img = $_POST['proj2_img'];
$proj2_url = $_POST['proj2_url'];
$proj3_img = $_POST['proj3_img'];
$proj3_url = $_POST['proj3_url'];
$proj4_img = $_POST['proj4_img'];
$proj4_url = $_POST['proj4_url'];
$proj5_img = $_POST['proj5_img'];
$proj5_url = $_POST['proj5_url'];
$proj6_img = $_POST['proj6_img'];
$proj6_url = $_POST['proj6_url'];


push_data($bio_push,$life_now_push,$goals_push,$db);

?>

<html>
    <a href="form.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
