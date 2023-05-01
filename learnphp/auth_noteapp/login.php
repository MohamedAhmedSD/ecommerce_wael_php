<?php

include "connection_noteapp.php";

$email = filterRequest("email");
$password = filterRequest("password");


// connect to our DB, to check is there user
$stmt = $con->prepare("SELECT * FROM users WHERE `password` = ? AND `email` = ? ");

// excute params
$stmt->execute(array($password, $email));

// I need user id to save it with sharedprefs
//save it on data var
$data = $stmt->fetch(PDO::FETCH_ASSOC);
// to know result of process
$count = $stmt->rowCount();

if ($count > 0) { // pass data with it
    echo json_encode(array("status" => "success","data"=> $data));

} else {
    echo json_encode(array("status" => 'fail login'));
}




