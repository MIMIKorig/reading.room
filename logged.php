<?php
    require "db.php";
    $data = $_POST;
    $user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id));

    function loadAvatar($avatar)
    {
        $type = $avatar['type'];
        $name = md5(microtime()).'.'.substr($type, strlen("image/"));
        $dir = 'uploads/avatars/';
        $uploadfile = $dir.$name;

        if(move_uploaded_file($avatar['tmp_name'], $uploadfile))
        {
            $user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id));
            $user->avatar = $name;
            R::store($user);
        }else{
            return false;
        }

        return true;
    }
?>