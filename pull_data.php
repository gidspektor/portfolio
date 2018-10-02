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
 * takes the array $about_result and turns it into a single key value of bio and finds out if the value is null
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key bio or if value is null it returns no
 */
function output_bio(array $about_result) :string
{
    if($about_result === 0) {
        return 'false';
        }
        else{
            return $about_result['bio'];
        }
}

/*
 * takes the array $about_result and turns it into a single key value of life_now and finds out if the value is null
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key life_now or if value is null it returns no
*/
function output_life(array $about_result) :string {

    if($about_result === 0) {
        return 'false';
    }
    else{
        return $about_result['life_now'];
    }
}

/*
 * takes the array $about_result and turns it into a single key value of goals and finds out if the value is null
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key goals or if value is null it returns no
 */
function output_goals(array $about_result) :string {
    if($about_result === 0) {
        return 'false';
    }
    else{
        return $about_result['goals'];
    }
}

$bio = output_bio($about_result);
$life_now = output_life($about_result);
$goals = output_goals($about_result);



