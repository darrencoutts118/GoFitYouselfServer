<?php
// Connect to remote database
mysql_connect("db4free.net","gofityourself","CS3024Bravo15Fit");
mysql_select_db("gofityourself") or die(mysql_error());

// Load the Sim Framework and setup the autoloaders
include "Slim/Slim.php";
\Slim\Slim::registerAutoloader();

// Create the app object
$app = new \Slim\Slim();

// Load all of the seperate parts
include 'Modules/members.php';
include 'Modules/excersise.php';
include 'Modules/schedule.php';
include 'Modules/authentication.php';
include 'Modules/workout.php';

// Run the application and routing
$app->run();


