<?php

require'functions.php';
require 'db.php';

$db = db_conn();


$proj_delete = $_POST['proj_delete'];

if (empty($proj_delete)) {
    exit('incomplete form');
}

delete_proj($proj_delete,$db);

?>


<html>
<a href="admin_proj_form.php"><h3>click here to return to form</h3></a>
<a href="index.php"> <h3>click here to go back to webpage</h3></a>
</html>