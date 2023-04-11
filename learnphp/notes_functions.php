<?php
// Signup => Insert
// Login => Select
// we make function and call it inside our signup file to not include it every time

// we use $_POST , we don't use "" inside [] when call our param
function filterRequest($requestname)
{
    return htmlspecialchars(strip_tags($_POST[$requestname]));
}


