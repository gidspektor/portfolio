<?php
require'functions.php';
require 'db.php';

$db = db_conn();

$proj_img = $_POST['proj_img'];
$proj_url = $_POST['proj_url'];
$proj_name = $_POST['proj_name'];

if (empty($proj_img) || empty($proj_url) || empty($proj_name)) {
    exit('incomplete form');
}


push_project($proj_img,$proj_url,$proj_name,$db);
?>


<html>
    <a href="admin_proj_form.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
