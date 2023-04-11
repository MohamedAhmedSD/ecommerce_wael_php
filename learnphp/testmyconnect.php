<?php

include "./lesson1.php";
// we can pass value of variables by using excute and use placeholder on values as (? or :)
// A => normal
// I get error due to I add , in wrong place
$stmt = $con->prepare("DELETE FROM users WHERE id = 23");
$stmt->execute();
// B => ? and value
$stmt = $con->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute(array(13));


// using rowCount()
// tell us if there any data added
$count = $stmt->rowCount();
echo $count;
// make condition

if ($count > 0) {
    echo "Succes";
} else {
    // error even when repeat data
    echo " failed";
}


