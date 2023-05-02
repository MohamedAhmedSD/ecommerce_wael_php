<?php

//* Signup => Insert
//? Login => Select
//! we make function and call it inside our signup file to not include it every time
//? our inside our connection file, so when call connection call functions inside it

//* we use $_POST , we don't use "" inside [] when call our param
function filterRequest($requestname)
{
//* we need encrypt our post code ====== [security] =====
return htmlspecialchars(strip_tags($_POST[$requestname]));
}




