<?php
require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$proj_img = $_POST['proj_img'];
$proj_url = $_POST['proj_url'];
$proj_name = $_POST['proj_name'];


push_project($proj_img,$proj_url,$proj_name,$db);
?>


<html>
    <a href="admin_proj_form.php.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
