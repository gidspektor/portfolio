<?php


$db = new PDO('mysql: host=127.0.0.1; dbname=portfolio, root');

$query = $db->prepare("SELECT `content` FROM `about_me` WHERE `id` = 1");

$query->execute();