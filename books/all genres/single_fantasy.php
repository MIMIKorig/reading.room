<?php include 'all_genresDB.php'; ?>
<?php include '../../header.php'; ?>

<?php $single = get_single_fantasy_by_id($_GET['id']); ?>

<head>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../single_book_page.css">
</head>

<div style="margin-top: 150px; margin-left: 300px;">

    <div class="book_block">
       <div class="book_block_leftColumn">
            <div class="book_image">
                <img src="<?php echo $single["img"];?>"><br>
            </div>
       </div>
        <div class="book_block_rightColumn">
            <div class="book_title">
                <?php echo $single["name"];?></a><br>   
            </div>
            <div class="book_subtitle">
                <?php echo $single["author"];?></a><br><br>
                <div class="book_reiting">
                    <!-- Рейтинг книги и его статистика -->
                    <p>REITING and STATS</p>
                </div>
            </div>
            <div class="book_body">
                <div class="book_description">
                    <!-- Описание книги -->
                    <p class="unto_descrip">Описание</p>
                    <?php echo $single["annotation"];?></a><br><br>
                </div>
                <div class="book_read">
                    <!-- Кнопка читать -->
                    <a class="book_btn_read" href="#" style="float:right; margin-right: 65px;">Читать</a> 
                </div>
                <script src="/js/book_read_btn.js"></script>
            </div>
            <div class="book_footer">
                <?php
                //  echo $single["book-footer"];
                 ?></a><br><br>
            </div>
        </div>
    </div>
</div>
<?php include "../../footer.php";?>