<?php


$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


function about_output(pdo $db) :array
{
    $query=$db->prepare("SELECT `bio`,`life_now`,`goals` FROM `about_me`");
    $query->execute();
    return $about_result = $query->fetch();
}
$about_result=about_output($db);


/*
 * takes array and turns it into a single key value
 *
 * @$param :array this is an array of fields from the about_me section of the db
 *
 *
 * @returns :string values from the key bio
 */
function output_bio(array $about_result) :string {
    return $about_result['bio'];
}

/*
 * takes array and turns it into a single key value
 *
 * @$param :array this is an array of fields from the about_me section of the db
 *
 *
 * @returns :string values from the key life_now
*/
function output_life(array $about_result) :string {
    return $about_result['life_now'];
}

/*
 * takes array and turns it into a single key value
 *
 * @$param :array this is an array of fields from the about_me section of the db
 *
 *
 * @returns :string values from the key goals
 */
function output_goals(array $about_result) :string {
    return $about_result['goals'];
}

$bio = output_bio($about_result);
$life_now = output_bio($about_result);
$goals = output_goals($about_result);




//function portfolio_output($db, $project_name)
//{
//    $portfolio_query = $db->prepare("SELECT `image`,`project_url` FROM `portfolio` WHERE ;");
//    $portfolio_query->execute();
//    return $portfolio_result = $portfolio_query->fetchAll();
//}
//
//
//    foreach ($portfolio_result as $result) {
//        return $result['image'].$result['project_url'];
//    }

