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

    if(isset($data['set_avatar']))
    {
        $avatar = $_FILES['avatar'];
        if(avatarSecurity($avatar)) loadAvatar($avatar);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maine</title>
</head>
<body>
        <?php if(isset($_SESSION['logged_user'])): ?>
            <link rel="stylesheet" href="/styles/main.css">

            <img src= "/uploads/avatars/<?php echo $user->avatar;?>" class='avatar'>  

            <form action="/main.php" method="post" enctype="multipart/form-data">
                <input type="file" name="avatar">
                <button type="submit" name="set_avatar">Обновить аватар</button>
            </form>
            Авторизован! <br>
            Привет, <?php echo $_SESSION['logged_user']->login; ?>!
            <hr>
            <a href="logout.php">Выйти</a><br>
            <a href="index.php">На главную</a>

        <?php else : ?>
            <a href="/login.php">Авторизация</a> <br>
            <a href="/signup.php">Регистрация</a>
        <?php endif; ?>
</body>
</html>