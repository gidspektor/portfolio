<?php
require 'pull_data.php';
?>



<h1>Enter new information</h1>
<form action="push_data.php" method="post">
    <h3>edit bio</h3>
    <input type="text" name="bio" value="<?php echo $bio;?>">
    <h3>edit life now</h3>
    <input type="text" name="life_now" value="<?php echo $life_now;?>"/>
    <h3>edit goals</h3>
    <input type="text" name="goals" value="<?php echo $goals;?>"/>
    <input type="submit"/>
</form>



