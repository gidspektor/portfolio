<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$about_query = $db->prepare("SELECT `content` FROM `about_me` WHERE `id` = 1;");

$about_query->execute();

$result = $about_query->fetchAll();

function output($result)
{
    foreach ($result as $result2) {
        echo $result2['content'];
    }
};

$final_output = output($result);
