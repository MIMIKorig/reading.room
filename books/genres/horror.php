<?php include "genresDB.php";?>
<?php include "../../header.php";?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../books.css">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
        <div class = "books_container">
            <?php
                $books = get_horror_all();
                foreach ($books as $book):?>
                    
                    
                    <div class= "books_box">
                        <!-- Текст -->
                        <ul>
                            <li><a href="single_horror.php?id=<?php echo $book["id"];?>">
                                <img src="<?php echo $book["img"];?>">
                            </a></li>
                            <li><a><?php echo $book["name"];?></a></li><br>
                            <li><a><?php echo $book["author"];?></a></li>
                            <li>ID=<?php echo $book["id"];?></li>
                        </ul>
                        <a href="single_horror.php?id=<?php echo $book["id"];?>">Подробнее..</a>
                    </div>
                    <?php endforeach ?>
        </div>
    </body>
</html>

<?php include "../../footer.php";?>