<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// POST - /auth/login
// Login to the system

$app->post('/auth/login', function() use ($app){
        
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
        
    $r=  mysql_query("SELECT * FROM User WHERE Username='$username' AND Password='$password'") or die(mysql_error());
    if(mysql_num_rows($r)!=1){
        $app->response->setStatus(403);
        echo json_encode(array("Error"=>  "Unknown username/password"));
    } else {
         $app->response->setStatus(200);
        echo json_encode(array("UserHash"=>  "abcd1234"));   
    }
    
    
});


// POST - /auth/reset
// Reset Password

$app->post('/auth/reset', function(){
    
    echo "Reset Password";
    
});