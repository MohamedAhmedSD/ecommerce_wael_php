
<?php
//ecommerce_wael
// we can edit our columns name from structure => column => change, besdie
// ability to change its data language
// from operations => table options => adjust all tables langauge
// what deggerence between => ./ or ../../ & just file name => if in same path 
include "../../connect.php";
// our columns with secure request
$username = filterRequest("username");
$password = sha1("password"); // use => sha1
$email = filterRequest("email");
$phone = filterRequest("phone");
// $veryfiycode = 0;
$verfiycode     = rand(10000 , 99999); // to make random number from 5 fields



// check if there any account on db
// if there same email or phone number on our db
// users_email not user :::::::::::::::::
// 2 places to write same as our db columns
// [A] when write Mysql instruction
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_phone = ? "); // [A]
$stmt->execute(array($email,$phone));

// to know result of process
$count = $stmt->rowCount();

if ($count > 0) {
// this account created before
// echo json_encode(array("status" => "success"));
// we make email & phone on db unique
echo printFailure("phone or email used");
} else {
// echo json_encode(array("status" => 'fail'));
// we use data function to add data
// [B] inside our function that write assoc array to assign our db to val that comes from var
    $data = array(
        "users_name" => $username,
        "users_password" => $password,
        "users_email" => $email,
        "users_phone" => $phone,
        "Users_verifycode" => "0",
    );
    // if it new user send email with verifycode
    sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 

    // you should call insert function 
    // it take => table name, array of data to add to table
    insertData("users",$data);
}

// when you pass data through thunder we write our variable not database columns :::::::::::::::::::::

