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
    <h3>insert project 1 image</h3>
    <input type="text" name="proj1_img"/>
    <h3>insert project 1 url</h3>
    <input type="text" name="proj1_url"/>
    <h3>insert project 2 image</h3>
    <input type="text" name="proj2_img"/>
    <h3>insert project 2 url</h3>
    <input type="text" name="proj2_url"/>
    <h3>insert project 3 image</h3>
    <input type="text" name="proj3_img"/>
    <h3>insert project 3 url</h3>
    <input type="text" name="proj3_url"/>
    <h3>insert project 4 image</h3>
    <input type="text" name="proj4_img"/>
    <h3>insert project 4 url</h3>
    <input type="text" name="proj4_url"/>
    <h3>insert project 5 image</h3>
    <input type="text" name="proj5_img"/>
    <h3>insert project 5 url</h3>
    <input type="text" name="proj5_url"/>
    <h3>insert project 6 image</h3>
    <input type="text" name="proj6_img"/>
    <h3>insert project 6 url</h3>
    <input type="text" name="proj6_url"/>
    <form action="push_data.php" method="post" id="text">
     <input type="submit"/>
    </form>
</main>


