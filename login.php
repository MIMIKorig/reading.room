<?php
    require "db.php";

    $data = $_POST;

    if(isset($data['do_login']))
    {
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if( $user)
        {
            if( password_verify($data['password'], $user->password))//расшифровывает пароль чтобы проверить правильность пароля при авторизации
            {
                $_SESSION['logged_user'] = $user;
                echo '<div style="color: green; top:0; margin-top:550px;">Вы успешно авторизовались! <br/>
                    Можете перейти на <a href="/main.php"> главную </a> страницу! </div><hr>'; 
            }else
            {
                $errors[] = 'Неверно введен пароль!';
                
                echo '<div style:"color:red;">Забыли пароль?<br>
                    Восстанови здесь - <a href="#"> Восстановить пароль </a>!
                </div><hr>';
                
            }
        }else
        {
            $errors[] = 'Пользователя с таким логином не найден!';
        }

        if( !empty($errors))
        {
            echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
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
    <!-- Форма авторизации -->
    <form action="login.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" value="<?php echo @$data['login'];?>" class="form-control inp">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль" value="<?php echo @$data['password'];?>">
        <button type="submit" name="do_login" class="btn btn-success">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="signup.php">Зарегистрироваться</a>!
        </p>
    </form>
    <script>
        inp = document.querySelector('.inp');
        btn = document.querySelector('.btn');
        btn.setAttribute('disabled', true);
        inp.oninput = function(){
            if(inp.value.length < 3)
            {
                btn.setAttribute('disabled', true);
            }else{
                btn.removeAttribute('disabled');
            }
        }
    </script>

</body>
</html>