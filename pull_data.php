<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);



$about_query=$db->prepare("SELECT `content` FROM `about_me` WHERE `id` = 1;");

$about_query->execute();

$about_result=$about_query->fetchAll();

function about_output($result)
{
    foreach ($result as $result2) {
        return $result2['content'];
    }
}
$about_output=about_output($about_result);




$portfolio_query=$db->prepare("SELECT `image`,`project_url` FROM `portfolio` WHERE `project_name` = 'project1';");

$portfolio_query->execute();

$portfolio_result=$portfolio_query->fetchAll();


function portfolio_output($portfolio_result) {
    foreach ($portfolio_result as $result) {
        return $result['image'].$result['project_url'];
    }
}

$portfolio_output=portfolio_output($portfolio_result);