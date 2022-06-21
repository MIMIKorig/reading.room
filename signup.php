<?php
    require "db.php";

    $data = $_POST;
    if(isset($data['do_signup']) )
    {
        //let's registr

        $errors = array();
        if(trim($data['login']) == '')
        {
            $errors[] = 'Введите логин!';
        }
        if(trim($data['email']) == '')
        {
            $errors[] = 'Введите email!';
        }
        if( $data['password'] == '')
        {
            $errors[] = 'Введите пароль!';
        }
        if( $data['password_confirm'] != $data['password'])
        {
            $errors[] = 'Повторный пароль введен не верно!';
        }

        if( R::count('users', "login = ?", array($data['login'])) > 0)
        {
            $errors[] = 'Пользователь с таким логином уже существует!';
        }
        if( R::count('users', "email = ?", array($data['email'])) > 0)
        {
            $errors[] = 'Пользователь с таким email уже существует!';
        }

        

        if( empty($errors))
        {
            //all good
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->avatar = 'man.png';
            R::store($user);

            echo '<div style="color: green; top:0; margin-top:550px;">Вы успешно зарегистрировались!</div><hr>'; 
        }else
        {
           echo '<div style="color: red; top:0; margin-top:550px;">'.array_shift($errors).'</div><hr>'; 
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>

    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
    <!-- Форма регистрации -->
    <form action="signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" class="form-control inp" value="<?php echo @$data['login'];?>">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту" value="<?php echo @$data['email'];?>">

        <label>Изображение профиля</label>
        <input type="file" name="avatar">

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль"  value="<?php echo @$data['password'];?>">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите свой пароль"  value="<?php echo @$data['password_confirm'];?>">
        <button type="submit" name="do_signup" class="btn btn-success">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">Авторизоваться</a>!
        </p>
        
    </form>
    <script>
        inp = document.querySelector('.inp');
        btn = document.querySelector('.btn');
        btn.setAttribute('disabled', true);
        inp.oninput = function(){
            if(inp.value.length < 5)
            {
                btn.setAttribute('disabled', true);
            }else{
                btn.removeAttribute('disabled');
            }
        }
    </script>
</body>
</html>