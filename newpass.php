<?php
require "db.php";
$data = $_GET;

if($_SESSION['logged_user'] != NULL) header('Location: /main.php');
if($data['key'] == NULL) header('Location: /main.php');

$user = R::findOne('users', 'change_key = ?', array($data['key']));
if(!$user) header('Location: /main.php');

if(isset($data['change']))
{
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    $user->change_key = NULL;
    R::store($user);
    header('Location: /login.php');
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
    <form action="/newpass.php" method="get" class="sign_form">
        <h1>Новый пароль</h1>
        <input type="hidden" name="key" value="<?php echo $data['key']; ?>">
        <input type="password" name="password" placeholder="Пароль" class="form-control inp"><br>
        <button type="submit" name="change" class="btn btn-success">Изменить пароль</button>
    </form>
    <script>
        inp = document.querySelector('.inp');
        btn = document.querySelector('.btn');
        btn.setAttribute('disabled', true);
        inp.oninput = function(){
            if(inp.value.length < 5)
            {
                btn.setAttribute('disabled', true);
                if(inp.value.length <= 4){
                    print('Недопустимая длинна пароля!');
                }
            }else{
                btn.removeAttribute('disabled');
            }
        }
    </script>
</body>
</html>