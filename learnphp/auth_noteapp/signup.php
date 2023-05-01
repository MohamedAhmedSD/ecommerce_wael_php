<?php
// impoer connection file
// may face alot of problems due to wrong include path
include "connection_noteapp.php";
// may import function on your connect file 
// and when call it you can access to it
// include "../notes_functions.php"; 


// we import function file inside our file,
// for security when we use POST
// we call it filterRequest

// var = callfuction("db column")
// $username = filterRequest("username");
$username_ = filterRequest("username");
$email_ = filterRequest("email");
$password_ = filterRequest("password");

// if(isset($_POST["username"])){
//     $username = $_POST["username"];
//     echo $username;
// }
// connect to our DB, to add data
$stmt = $con->prepare("
INSERT INTO `users` (`username`,`email`,`password`) 
VALUES (?,?,?)
");

// excute params
$stmt->execute(array($username_, $email_, $password_));


// to know result of process
$count = $stmt->rowCount();

if ($count > 0) {
    // back json to use it on flutter
    echo json_encode(array("status" => "success"));
    // when you use => print_r => not be able recive data on flutter
    // because mixed data type json & others
    // print_r($stmt);
} else {
    echo json_encode(array("status" => 'fail sign up'));
}


// test our api => use thunder [ http://localhost/ecommerce/learnphp/auth_noteapp/signup.php ] => post
// first add values of data to DB if you don't it add empty fields
// and not back any data
// also don't forget change db name on connection file


