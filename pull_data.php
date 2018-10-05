<?php

require 'functions.php';
require 'db.php';

$db = db_conn();


$about_result=about_output($db);
$sanitised_output = null_pull($about_result);

$portfolio_result = portfolio_output($db);


$proj = grab_result($portfolio_result);

$bio = output_bio($sanitised_output);
$life_now = output_life($sanitised_output);
$goals = output_goals($sanitised_output);



