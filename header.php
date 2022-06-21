<?php include 'logged.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width=1536">-->
    <title>RR-reading room</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/slidert.css">
    <link rel="stylesheet" href="/styles/dropdown.css">
    <link rel="stylesheet" href="/styles/profile.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>                            

<header>
    <div class="topnav">
        <div class="topnav-logo">
            <a href="/" class="active">RR-reading room</a>
        </div>
        <div class="topnav-panel">
            <div>
                <div class="dropdown">
                    <button class="dropbtn">Книги ▼</button>
                        <div class="dropdown-content">
                            <div class="dropdown_columns">
                                <div class="dropdown_left_column">
                                    <h5>ЧТО ПОЧИТАТЬ?</h5>
                                    <a href="#" id="dropdown_a">Новинки</a>
                                    <a href="#" id="dropdown_a">Скидки</a>
                                    <a href="#" id="dropdown_a">Рекомендуемое</a>
                                    <a href="#" id="dropdown_a">Подборка</a>
                                    <a href="/books/books.php" id="dropdown_a">ИТ</a>                                    
                                </div>
                                <div class="dropdown_middle_column">
                                    <h5>ЖАНРЫ</h5>
                                    <a href="/books/genres/action.php" id="dropdown_a">Боевик</a>
                                    <a href="/books/genres/historical_prose.php" id="dropdown_a">Историческая проза</a>
                                    <a href="/books/genres/romance_novels.php" id="dropdown_a">Любовные романы</a>
                                    <a href="/books/genres/teen_prose.php" id="dropdown_a">Подростковая проза</a>
                                    <a href="/books/genres/poetry.php" id="dropdown_a">Поэзия</a>
                                    <a href="/books/genres/horror.php" id="dropdown_a">Ужасы</a>
                                    <a href="/books/genres/portal_traveler.php" id="dropdown_a">Попаданцы</a>
                                </div>
                                <div class="dropdown_right_column">
                                    <h5>ВСЕ ЖАНРЫ</h5>
                                    <a href="/books/all genres/detective.php" id="dropdown_a">Детектив</a>
                                    <a href="/books/all genres/mystic.php" id="dropdown_a">Мистика</a>
                                    <a href="/books/all genres/adventure.php" id="dropdown_a">Приключения</a>
                                    <a href="/books/all genres/thriller.php" id="dropdown_a">Триллер</a>
                                    <a href="/books/all genres/fantasy.php" id="dropdown_a">Фантастика</a>
                                    <a href="/books/all genres/phantasie.php" id="dropdown_a">Фэнтези</a>
                                    <a href="/books/all genres/humor.php" id="dropdown_a">Юмор</a>
                                </div>
                            </div>
                        </div>
                </div><div class="dropdown">
                        <form action="../../discussions/discussions.php">
                            <button class="dropbtn">Обсуждения</button>
                        </form>
                </div><div class="dropdown">
                        <button class="dropbtn">Сообщество ▼</button>
                        <div class="dropdown-content">
                            <div class="dropdown_columns">
                                <div class="dropdown_left_column">
                                    <h5>ТОП</h5>
                                    <a href="#" id="dropdown_a">Авторов</a>
                                    <a href="#" id="dropdown_a">Пользователей</a>
                                </div>
                            </div>
                        </div>
                    </div><div class="dropdown">
                        <form action="#"><button class="dropbtn">Моя библиотека</button></form>
                    </div>

                <div class="topnav-account_panel">
                    <?php if(isset($_SESSION['logged_user'])): ?>
                        <img class="logged_avatar" src= "../uploads/avatars/<?php echo $user->avatar;?>">
                        <a href="../profile.php"><?php echo $_SESSION['logged_user']->login;?></a><!--Никнейм юзера -->
                        <!--<a href="../logout.php">Выйти</a>Эта хуйня никак не хочет быть сзади, тут он на время, скоро уйдет,,, наlеюсь -->
                    <?php else : ?>
                        <a href="/signup.php">Регистрация</a>
                        <a href="/login.php">Авторизация</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>