<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// GET - /schedule/current
// Get the current schedule

$app->get('/schedule/current', function() use($app){
 
    $arr = [];
    $arr[] = array("Day"=>1,"StartTime"=>"13:00","Workout"=>637);
    $arr[] = array("Day"=>2,"StartTime"=>"17:00","Workout"=>654);
    $arr[] = array("Day"=>4,"StartTime"=>"12:00","Workout"=>634);
    $arr[] = array("Day"=>6,"StartTime"=>"13:30","Workout"=>632);
    
    echo json_encode(array("schedule"=>$arr));
    
});



// POST - /schedule/create
// Create new Schedule

$app->post('/schedule/create', function() use($app){
            $app->response->setStatus(403);

    echo json_encode(array("ty"=>"New Schedule"));
    
});