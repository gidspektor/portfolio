<?php
require 'pull_data.php';
?>

<link rel="stylesheet" href="form.css" type="text/css">

<main>
    <h1>Enter new information</h1>
    <h3>edit bio</h3>
    <textarea class="text_box" name="bio" form="text"> <?php echo $bio;?></textarea>
    <h3>edit life now</h3>
    <textarea class="text_box" name="life_now" form="text"> <?php echo $life_now;?></textarea>
    <h3>edit goals</h3>
    <textarea class="text_box" name="goals" form="text"> <?php echo $goals;?></textarea><br>

    <h3>edit bio</h3>
    <textarea class="text_box" name="bio" form="text"> <?php echo $bio;?></textarea>



    <form action="push_data.php" method="post" id="text">
     <input type="submit"/>
    </form>
</main>


