<?php

session_start();

$_SESSION['user'] = $entered_user_name;
$_SESSION['password'] = $entered_password;




?>

<h4>enter username and password</h4>
<form action="login_check.php" method="post">
    <input type="text" name="username"/>
    <input type="text" name="password"/>
    <input type="submit"/>
</form><br>

