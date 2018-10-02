<?php

require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$about_result=about_output($db);
$sanitised_output = null_pull($about_result);

$portfolio_result1 = portfolio_output($db,'project1');
$proj1=grab_result($portfolio_result1);

$portfolio_result1 = portfolio_output($db,'project2');
$proj2=grab_result($portfolio_result1);

$portfolio_result1 = portfolio_output($db,'project3');
$proj3=grab_result($portfolio_result1);

$portfolio_result1 = portfolio_output($db,'project4');
$proj4=grab_result($portfolio_result1);

$portfolio_result1 = portfolio_output($db,'project5');
$proj5=grab_result($portfolio_result1);

$portfolio_result1 = portfolio_output($db,'project6');
$proj6=grab_result($portfolio_result1);



$bio = output_bio($sanitised_output);
$life_now = output_life($sanitised_output);
$goals = output_goals($sanitised_output);



