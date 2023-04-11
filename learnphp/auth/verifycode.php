<?php 

include "../../connect.php" ;

// we recive both user email, verifycode that send to hem
$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

// we can compare by sql or php
// here as php comparson
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verifycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

// if approved user we change its status
if ($count > 0) {
 
    $data = array("users_approve" => "1") ; 
    // update our db
    // "table", data, where => "users_email = '$email'"
    // refresh it
    updateData("users" , $data , "users_email = '$email'");

}else {
 printFailure("verifycode not Correct") ; 

}

// how we export our db
// phpmyadmain => export=> export or go , it work for both db our one table
// it give you sql file
// we make new db as host db name
// then copy it and paste on => phpadmain => sql => our code

// test them with thunder