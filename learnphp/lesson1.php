<?php
// PDO : php data object
// save this file to use it later
// aim to => [connect yourself with DB , use arabic lang, deal with exceptions]
// we make simple db, with 3 cols

//Establish connection to the database
$dsn = "mysql:host=localhost;dbname=course_php";
$user = "root";
$pass = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' // for arabic lang
);

// calling & connect
try {
    // to pass what write above
    // new PDO() == make an object, that need 4 parameter values to pass through it
    // con => instance from PDO that connect with db
    // better use => new before => PDO
    $con = new PDO($dsn, $user, $pass, $option);
    //  Set the error mode of the connection to => ERRMODE_EXCEPTION
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // call my function on connection file, make it easy to reach them from one file
    include "./notes_functions.php";
} catch (PDOException $e) {
    // ->  it equal . to access function & attribute inner class
    echo $e->getMessage();
}

// we upload it 
// if we need to change things it may => db name, user & pw

// test it by use => include "yiur connect php file"; // from other page
// include == import

