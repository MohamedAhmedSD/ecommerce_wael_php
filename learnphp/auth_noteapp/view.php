<?php
// id => is unique key to deal with user
// it same to deal with =>  login

include "connection_noteapp.php";

// we have relation [ cascade by phpmayadmin ]
// between user => id & notes_users so we give it value of userid
$userid = filterRequest("id");


// connect to our DB
$stmt = $con->prepare("SELECT * FROM notes WHERE `notes_users` = ?");
// $stmt = $con->prepare("SELECT * FROM notes WHERE `notes_users` = '$userid'");
// excute params
$stmt->execute(array($userid));
// $stmt->execute();

// to get data from user to use it later on sharedpreferences
// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// we use fetchAll to back list on dart from our json

// fetch back map, fetchall back list
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $data = array(
//     "notes_users" => $userid,
//  );
// back json to use it on flutter
$count = $stmt->rowCount();

if ($count > 0) {
    // don't forget we pass data to convert array into json
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => 'fail view'));
}



/**
 * <?php
include "connection_noteapp.php";

$userid = filterRequest("id");

$stmt = $con->prepare("SELECT * FROM notes WHERE `notes_users` = ?");
$stmt->execute(array($userid));
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $notes));
} else {
    echo json_encode(array("status" => 'fail view'));
}
?>
 */