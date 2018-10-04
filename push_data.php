<?php
require 'functions.php';
require 'db.php';

$db = db_conn();

$bio_push = $_POST['bio'];
$life_now_push = $_POST['life_now'];
$goals_push = $_POST['goals'];

push_data($bio_push,$life_now_push,$goals_push,$db);

?>

<html>
    <a href="form.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
