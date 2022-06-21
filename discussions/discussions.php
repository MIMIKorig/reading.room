<?php include "discussionsDB.php";?>
<?php include "../header.php";?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="discussions.css">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class = "discussions_container">
            <?php
                $discussions = get_books_all();
                foreach ($discussions as $discussion):?>
                    <div class= "discussions_box">
                        <!-- Текст -->
                        <ul>
                            <li><a href="single_discussions.php?id=<?php echo $discussion["id"];?>">
                                
                            </a></li>
                            <li><a><?php echo $discussion["author"];?></a></li><br>
                            <li><a><?php echo $discussion["title_dis"];?></a></li>
                            <li><?php echo $discussion["dis_descrip"];?></li>
                        </ul>
                        <a href="single_discussion.php?id=<?php echo $discussion["id"];?>">Подробнее..</a>
                    </div>
                    <?php endforeach ?>
        </div>
    </body>
</html>

<?php include "../footer.php";?>