<?php




require 'functions.php';


$entered_user_name = $_POST['username'];
$entered_password = $_POST['password'];

$correct_pass = 'qingjin1';
$correct_user = 'fangyuan';


check_input($entered_user_name,$correct_user,$entered_password,$correct_pass);

?>



<html>
<a href="form.php"><h3>click here to edit bio</h3></a>
<a href="admin_proj_form.php"> <h3>click here to edit projects</h3></a>
</html>
