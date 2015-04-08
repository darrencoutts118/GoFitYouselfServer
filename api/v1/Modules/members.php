<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// POST - /members/create
// Create a new member and register them to the database

$app->post('/members', function() use ($app){
    
    $username = mysql_real_escape_string($_POST['Username']);
    $password = mysql_real_escape_string($_POST['Password']);
    $fname = mysql_real_escape_string($_POST['Firstname']);
    $lname = mysql_real_escape_string($_POST['Lastname']);
    $email = mysql_real_escape_string($_POST['Email']);
    
    if(!$username || !$fname || !$lname || !$password || !$email){
        $error = "You must complete all fields";
    } else {
        
        $r=mysql_query("SELECT * FROM User WHERE Username = '".mysql_real_escape_string($username)."'") or die(mysql_error());
        if(mysql_num_rows($r) > 0 ){
            $error = "Username is already in use";
        } else {
            $r=mysql_query("SELECT * FROM User WHERE Email = '".mysql_real_escape_string($email)."'") or die(mysql_error());
            if(mysql_num_rows($r) > 0 ){
                $error = "Email Address is already in use";
            } else {
                if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $error = "Email address is not valid";
                }
            }
        }       
    }
    
    if(!$error){
        mysql_query("INSERT INTO User (`Username`,`Password`,`Firstname`,`Lastname`,`Email`) VALUES ('$username','$password','$fname','$lname','$email')") or die(mysql_error());
         $app->response->setStatus(200);
        echo json_encode(array("Success"=>true));
    } else {
        $app->response->setStatus(403);
        echo json_encode(array("Error"=>$error));
    }
    
});



// GET - /members/me
// Get the current memebers information

$app->get('/members/me', function(){
    
    echo "Get the current member";
    
});


// PUT - /members/me
// Update the current memebers information

$app->post('/members/me/slots', function(){
    
    echo json_encode(array("hello"=>"Update the current member"));
    mail("darren.coutts@interhubdigital.com","PUT",  print_r($_SERVER,true));
    
});


// DELETE - /members/me
// Delete the current memebers information

$app->delete('/members/me', function(){
    
    echo "Remove the current member";
    
});


// GET - /members/(:int)
// Update the current memebers information

$app->get('/members/:id', function($id){
    
    echo "Get user $id";
    
});
