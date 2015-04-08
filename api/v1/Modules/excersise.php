<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// GET - /excersise/:id
// Get excersise

$app->get('/excercise/:id', function($id){
    
    echo json_encode(array("Name"=>"Crunch", "Description"=>"Lorem.....", "ImageURL"=>"http://example.com/image1.png"));
    
});


// POST - /excersise/:id
// Rate Excersise

$app->post('/excercise/:id/rate', function($id){
    
    echo json_encode(array("done"=>true));
    
});