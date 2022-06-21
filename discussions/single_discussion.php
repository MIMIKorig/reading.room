<?php include 'discussionsDB.php'; ?>
<?php $single = get_single_by_id($_GET['id']); ?>
<?php include '../header.php'; ?>

<!--
    Короче, когда пользователь будет публиковат "Обсуждение", то вместе с текстовкой форума будет также
        аватарка загружаться на бд "test-book" - - ->"discussions_table" в "author_avatar"
        ---
    Потом когда будем заходить на страничку поста, скрипт просто выгрузить аватарку из бд    
-->



<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="single_discussions.css">
</head>

<div style="margin-top: 150px; margin-left: 300px;">
    <div class="discussion_block">
        <div class="discussion_title">
            <div class="discussion_left_title">
                <div class="discussion_author_avatar">
                    <!-- <img src= "../uploads/avatars/....." class='avatar'> --> 
                    <img src="../logo/insta.png">
                </div>
            </div>
            <div class="discussions_right_title">
                <div class="discussion_name">
                    <?php echo $single["title_dis"];?><br>   
                </div>
                <div class="discussion_subtitle">
                    <div class="discussion_author">
                        <p>Автор:  <a href="#"><?php echo $single["author"];?></a></p>
                    </div>
                    <div class="discussion_stats">
                        <!-- Рейтинг  и  статистика  discussions-->
                        <p>REITING and STATS</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="discussion_body">
            <div class="discussion_body">
                <div class="dis_descrip">
                    <!-- Описание книги -->
                    <p class="dis_descrip">Наименование: </p>
                    <?php echo $single["dis_descrip"];?></a><br><br>
                </div>
            </div>
        </div>
        <div class="discussion_footer">
            <?php echo $single["dis_footer"];?></a><br><br>
        </div>
    </div>
</div>
<?php include "../footer.php";?>