<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);







function about_output($id,$db)
{
    $about_query=$db->prepare("SELECT `content` FROM `about_me` WHERE `id` = '$id';");
    $about_query->execute();
    $about_result=$about_query->fetchAll();
    return $about_result['content'];
}








function portfolio_output($db,$project_name) {
    $portfolio_query=$db->prepare("SELECT `image`,`project_url` FROM `portfolio` WHERE `project_name` = '$project_name';");
    $portfolio_query->execute();
    $portfolio_result=$portfolio_query->fetchAll();

    foreach ($portfolio_result as $result) {
        return $result['image'].$result['project_url'];
    }
}
