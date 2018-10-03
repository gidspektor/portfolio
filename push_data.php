<?php
require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$bio_push = $_POST['bio'];
$life_now_push = $_POST['life_now'];
$goals_push = $_POST['goals'];

$proj_img = $_POST['proj_img'];
$proj_url = $_POST['proj_url'];
push_project($proj_img,$proj_url,'project1',$db);

//
//$proj2_img = $_POST['proj2_img'];
//$proj2_url = $_POST['proj2_url'];
//$value = push_project($proj2_img,$proj2_url,'project2',$db);
//
//$proj3_img = $_POST['proj3_img'];
//$proj3_url = $_POST['proj3_url'];
//push_project($proj3_img,$proj3_url,'project3',$db);
//
//$proj4_img = $_POST['proj4_img'];
//$proj4_url = $_POST['proj4_url'];
//push_project($proj4_img,$proj4_url,'project4',$db);
//
//$proj5_img = $_POST['proj5_img'];
//$proj5_url = $_POST['proj5_url'];
//push_project($proj5_img,$proj5_url,'project5',$db);
//
//$proj6_img = $_POST['proj6_img'];
//$proj6_url = $_POST['proj6_url'];
//push_project($proj6_img,$proj6_url,'project6',$db);

push_data($bio_push,$life_now_push,$goals_push,$db);

?>

<html>
    <a href="form.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
