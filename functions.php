<?php
/*
 * takes the inputted strings from each field and pushes it to the database
 *
 * @param these are the strings that have been inputted on the form
 *
 * @returns 3 values
 *
 */
function push_data(string $bio, $life_now, $goals, pdo $db) :int {
    $query=$db->prepare("UPDATE `about_me` SET `bio`= :bio,`life_now` = :life_now,`goals` = :goals WHERE `id` = 1;");
    $query->bindParam(':bio',$bio);
    $query->bindParam(':life_now',$life_now);
    $query->bindParam(':goals',$goals);
    return $query->execute();
}

/*
 * selects the fields, bio, life_now and goals from about me in the database
 *
 * @param this is the database
 *
 * @returns an array of the fields bio,life_now and goals and their contents
 *
 */
function about_output(pdo $db) :array
{
    $query=$db->prepare("SELECT `bio`,`life_now`,`goals` FROM `about_me`");
    $query->execute();
    return $about_result = $query->fetch();
}

/*
 * takes the array $about_result and finds out if the value is null
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns array or boolean if empty but returns the array if the array is there with data
 */
function null_pull(array $about_result)
{
    if(empty($about_result)){
        return  'false';
    } else {
        return $about_result;
    }
}

/*
 * takes an array and turns it into a string
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key bio
 */
function output_bio(array $about_result) :string {
    if(array_key_exists('bio',$about_result)){
        return $about_result['bio'];
    } else {
        return 'false';
    }
}

/*
 * takes an array and turns it into a string
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key life_now
*/
function output_life(array $about_result) :string {
    if(array_key_exists('life_now',$about_result)){
        return $about_result['life_now'];
    } else {
        return 'false';
    }


}

/*
 * takes an array and turns it into a string
 *
 * @$param array this is an array of fields from the about_me section of the db
 *
 * @returns string values from the key goals
 */
function output_goals(array $about_result) :string {
    if(array_key_exists('goals',$about_result)){
        return $about_result['goals'];
    } else {
        return 'false';
    }
}

