<?php
require_once'functions.php';
require_once 'db.php';

$db = db_conn();

$proj_img = $_POST['proj_img'];
$proj_url = $_POST['proj_url'];
$proj_name = $_POST['proj_name'];

$proj_delete = $_POST['proj_delete'];


delete_proj($proj_delete,$db);

push_project($proj_img,$proj_url,$proj_name,$db);
?>


<html>
    <a href="admin_proj_form.php"><h3>click here to return to form</h3></a>
    <a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>
