<?php
// I change dsn ... dbname to that I use it

// $dsn = "mysql:host=localhost;dbname=ecommmerce";
// $dsn = "mysql:host=localhost;dbname=ecommerce_wael";
// // I am on locak so no user or pw
// // test them by create => test.php
// $user = "root";
// $pass = "";

//! use hosting
$dsn = "mysql:host=localhost;dbname=epiz_34011609_ecommerce_new";
// I am on locak so no user or pw
// test them by create => test.php
$user = "epiz_34011609";
$pass = "XbBALRBrQDOI";



$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9;
try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
   include "functions.php";
   if (!isset($notAuth)) {
      // checkAuthenticate();
      // when upload to server we use it
   }
} catch (PDOException $e) {
   echo $e->getMessage();
}
