<?php include 'header.php'; ?>


<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styles/profile.css">
</head>

<div style="margin-top: 150px; margin-left: 300px;">
    <div class="profile_block">
        <?php if(isset($_SESSION['logged_user'])): ?>
            <div class="profile_avatar">
                <img class="profile_avatar_block" src= "../uploads/avatars/<?php echo $user->avatar;?>">
                <div class="profile_annotation">
                    <p><?php echo $_SESSION['logged_user']->login;?></p>
                    <div class="profile_info">
                        <p>Дата регистрации: 10.06.2022</p>
                    </div>
                    <div class="profile_avatar_update">
                        <form action="/main.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="avatar">
                            <button type="submit" name="set_avatar">Обновить аватар</button>
                            <form action="/logout.php" method="post">
                                <button type="submit">Выйти из аккаунта</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
            
        <?php else : ?>
            <div class="profile_block">
                <a href="/signup.php">Регистрация</a>
                <a href="/login.php">Авторизация</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php include "footer.php";?>
