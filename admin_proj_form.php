<?php
require 'pull_data.php';

?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css" type="text/css">  <link rel="stylesheet" href="style.css" type="text/css">
    <title>Gideon Spektor</title>
</head>

<form action="push_proj.php" method="post" id="text">
<h3>Insert a new project name</h3>
        <input type="text" name="proj_name" />
         <h3>Insert a new image for project 1</h3>
         <input type="text" name="proj_img" />
         <h3>Insert a new url for project 1</h3>
         <input type="text" name="proj_url" />

<section id="project" class="pageThree">
    <div class="showcase">
        <div class="cards">
            <?php echo $proj?>
        </div>
    </div>
    </div>
</section>


    <input type="submit"/>
</form>