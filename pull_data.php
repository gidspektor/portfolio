<?php

require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$about_result=about_output($db);
$sanitised_output = null_pull($about_result);

$portfolio_result = portfolio_output($db);


$proj = grab_result($portfolio_result);

$bio = output_bio($sanitised_output);
$life_now = output_life($sanitised_output);
$goals = output_goals($sanitised_output);



