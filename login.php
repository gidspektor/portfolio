<?php

session_start();
if (password_verify($_POST['password'], '$hash') && ($_POST['username']) === ) {
    $_SESSION['admin'] = 'loggedIn';
    header('Location: dashboard.php');
}
else {
    header('Location: login.php?error=01');
}



?>

<h4>enter username and password</h4>
<form action="login_check.php" method="post">
    <input type="text" name="username"/>
    <input type="text" name="password"/>
    <input type="submit"/>
</form><br>

