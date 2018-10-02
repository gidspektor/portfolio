<?php




function portfolio_output($db, $project_name)
{
    $portfolio_query = $db->prepare("SELECT `image`,`project_url` FROM `portfolio` WHERE ;");
    $portfolio_query->execute();
    return $portfolio_result = $portfolio_query->fetchAll();
}


foreach ($portfolio_result as $result) {
    return $result['image'].$result['project_url'];
}
