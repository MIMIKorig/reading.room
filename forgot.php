<?php
require "db.php";
$data = $_POST;
if(isset($data['forgot']))
{
    $user = R::findOne('users', 'email = ?', array($data['email']));
    if($user)
    {
        $key = md5($user->login.rand(1000, 9999));
        $user->change_key = $key;
        R::store($user);

        $url = $site_url.'newpass.php?key='.$key;
        $message = $user->login.", был выполнен запрос на изменение вашего пароля. \n\n Для изменения перейдите по ссылке: ".$url."\n\n Если это были не вы, то советуем вам изменить ваш пароль!";

        mail($data['email'], 'Подтвердите действие!', $message);
        header('Location: /main.php');
    }else{
        echo "Данный email не зарегистрирован!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget the Password</title>
</head>
<body>
    <form action="/forgot.php" method="post" class="sign_form">
        <h1>Забыли пароль?</h1>
        <input type="email" name="email" placeholder="Email" class="form-control inp"><br>
        <button type="submit" name="forgot" class="btn btn-success">Отправить письмо</button>
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