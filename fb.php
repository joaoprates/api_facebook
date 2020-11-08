<?php 
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '287372392366199',
	'app_secret' => '58ab0decc5f72fed31fb44abfcbcc4a8',
	'default_graph_version' => 'v2.3'
]);