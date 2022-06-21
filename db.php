<?php

require "rb.php";

R::setup( 'mysql:host=localhost;dbname=register',
'root', '' );
$site_url = "http://cwpass.kz/";
session_start();


function avatarSecurity($avatar)
{
    $name = $avatar['name'];
    $type = $avatar['type'];
    $size = $avatar['size'];
    $blacklist = array(".php", ".js", ".html");

    foreach($blacklist as $row)
    {
        if(preg_match("/$row\$/i", $name)) return false;
    }

    if(($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;
    if($size > 5 * 1024 * 1024) return false;

    return true;
}

