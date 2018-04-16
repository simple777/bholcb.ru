<?php

require_once __DIR__.'/../../config.php';

session_start();


?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo SITEURL;?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/main.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/ui.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div class="admin-page-wrapper">

    <div class="admin-header clearfix"><p>Панель управления</p></div>

    <div class="admin-content-wrapper clearfix">

        <aside class="admin-menu-left">

            <section>
                <nav role="navigation" class="admin-menu-left-list">
                    <a href="<?php echo SITEURL;?>admin/views/news_add.php">Новости</a>
                    <a href="<?php echo SITEURL;?>admin/views/person_add.php">Люди</a>
                    <a href="#">Новинки</a>
                </nav>
            </section>

        </aside>

        <aside class="admin-content-wrapper-in">

            <div class="admin-content-control-panel">
                <div class="green" id="but-make-dir"></div>
                <div class="green" id="images-prepare"></div>
                <div class="green" id="but-clr-all"></div>
            </div>

            <div class="admin-content">

                <form action="<?php echo SITEURL;?>admin/ajax/person_insert.php" method="POST" id="admin-insert-person" name="admin-insert-person" class="admin-form">

                    <legend>Добавить человека</legend>

                    <input type="text" id="name" name="name" placeholder="ФИО" class="admin-input" value="" required>

                    <input type="text" id="f_name" name="f_name" placeholder="Имя" class="admin-input" value="">
                    <input type="text" id="s_name" name="s_name" placeholder="Отчество" class="admin-input" value="">
                    <input type="text" id="t_name" name="t_name" placeholder="Фамилия" class="admin-input" value="">

                    <input type="text" id="name-eng" name="name-eng" placeholder="FIO" class="admin-input" value="" required>

                    <input type="text" id="city" name="city" placeholder="Город" class="admin-input" value="" required>

                    <input type="text" id="imgprev" name="imgprev" placeholder="Превью 400x400" class="admin-input forclear" required>

                    <textarea type="text" id="text" name="text" placeholder="Текст" class="admin-input forclear" required></textarea>

                    <input type="text" id="tags" name="tags" placeholder="Теги" class="admin-input forclear">


                    <select id="author" name="author">
                        <option>0</option>
                        <option>1</option>
                    </select>

                    <br>

                    <input type="submit" value="Добавить" class="admin-form-submit">

                </form>

            </div>
            <div class="admin-sidebar-wrapper">

                <div class="preloader" id="preloader_h"><img src="<?php echo SITEURL;?>admin/images/ui/preloader_h.gif"></div>
                <div class="images-preview-wrapper">
                    <div class="images-preview" id="images-preview"></div>
                    <textarea type="text" id="gallery-html" name="gallery-html" placeholder="gallery-html" class="admin-input forclear"></textarea>
                </div>
            </div>
        </aside>

    </div>

</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL;?>admin/js/jquery.liTranslit.js"></script>
<script src="<?php echo SITEURL;?>admin/js/ui.js"></script>
<script src="<?php echo SITEURL;?>admin/js/larger.js"></script>
<script>
    $(function(){
        $('#admin-insert-person #name').liTranslit({
            elAlias: $('#admin-insert-person #name-eng')
        });
    });
</script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>