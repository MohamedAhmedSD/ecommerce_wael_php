<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");

// avoid writing error by copy columns name and paste them here 
$data = array( 
"users_name" => "wael",
"users_email" => "wael@gmail.com",
"users_phone" => "324234",
"users_verifycode" => "3243243",       
);
$count = insertData($table , $data);

// we go to this link
// it is a folder where we put our php files
// C:\xampp\htdocs\ecommerce
// http://localhost/ecommerce/
// go to open test.php

