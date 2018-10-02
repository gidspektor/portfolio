<?php



function push_data( $bio, $life_now, $goals, pdo $db) {
    $query=$db->prepare("UPDATE `about_me` SET `bio`= :bio,`life_now` = :life_now,`goals` = :goals WHERE `id` = 1;");
    $query->bindParam(':bio',$bio);
    $query->bindParam(':life_now',$life_now);
    $query->bindParam(':goals',$goals);
    return $query->execute();
}

