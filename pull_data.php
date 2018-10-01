<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


function about_output(pdo $db) :array
{
    $query=$db->prepare("SELECT `content` FROM `about_me`");
    $query->execute();
    return $about_result = $query->fetchAll();
}
$about_result=about_output($db);

var_dump($about_result);


/*
 * takes array and turns it into a single key value
 *
 * @$param :array this is an array of fields from the about_me section of the db
 *
 *
 * @return :string a key value from the content field
 */
function choose_data(array $about_result) :string
{
    foreach ($about_result as $result) {
        return $result['content'];
    }
}
$final_about=choose_data($about_result);






//function portfolio_output($db, $project_name) {
//    $portfolio_query=$db->prepare("SELECT `image`,`project_url` FROM `portfolio` WHERE `project_name` = ':project_name';");
//    $portfolio_query->bindParam(':project_name',$project_name);
//    $portfolio_query->execute();
//    $portfolio_result=$portfolio_query->fetchAll();
//
//    foreach ($portfolio_result as $result) {
//        return $result['image'].$result['project_url'];
//    }
//}
