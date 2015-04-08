<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// GET - /workout/:id
// Get workout

$app->get('/workout/:id', function($id){
    
    
    $arr = [];
    $arr[] = array("Exercise"=>12,"Reps"=>4,"Sets"=>4);
    
    $arr[] = array("Exercise"=>21,"Reps"=>2,"Sets"=>5);
    
    $arr[] = array("Exercise"=>19,"Reps"=>3,"Sets"=>4);
    
    echo json_encode(array("workout"=>$arr));
    
});


// POST - /workout/:id/complete
// Mark workout complete

$app->post('/workout/:id/complete', function($id){
    
    echo json_encode(array("success"=>true));
    
});