<?php

session_start();

if (isset($_SESSION['dir_name_ru']))
{
    $dir_name = $_SESSION['dir_name_ru'];

    if (isset($_SESSION['dir_path']))
    {
        $dir_path = $_SESSION['dir_path'];
    }

    else { $dir_path = ''; }


    if (isset($_SESSION['dir_url']))
    {
        $dir_url = $_SESSION['dir_url'];
    }

    else { $dir_url = ''; }
}

else
{
    $dir_name = '';
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo SITEURL;?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ui.css">
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
                    <a href="#">Новости</a>
                    <a href="#">Афиша</a>
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

                <form action="ajax/news_insert.php" method="POST" id="admin-insert-news" name="admin-insert-news" class="admin-form">

                    <legend>Добавить новость</legend>

                    <input type="text" id="title" name="title" placeholder="Заголовок" class="admin-input" value="<?php echo $dir_name; ?>" required>
                    <input type="text" id="title-eng" name="title-eng" class="admin-input">
                    <input type="text" id="path" name="path" class="admin-input" disabled value="<?php echo $dir_path; ?>">
                    <input type="text" id="url" name="url" class="admin-input" disabled value="<?php echo $dir_url; ?>">
                    <input type="date" name="publish_date" class="forclear" required>

                    <input type="text" id="imgprev-medium" name="imgprev-medium" placeholder="Превью 400x400" class="admin-input forclear" required>
                    <input type="text" id="imgprev-small" name="imgprev-small" placeholder="Превью 170x170" class="admin-input forclear" required>

                    <textarea type="text" id="description" name="description" placeholder="Краткое описание" class="admin-input description forclear" required></textarea>
                    <textarea type="text" id="text" name="text" placeholder="Текст" class="admin-input forclear" required></textarea>

                    <input type="text" id="tags" name="tags" placeholder="Теги" class="admin-input forclear">


                    <select id="author" name="author">
                        <option>Администратор</option>
                        <option>Администрация</option>
                        <option>Мякишева И. В., гл. библиотекарь центральной библиотеки</option>
                    </select>

                    <select id="category" name="category">
                        <option>Новости</option>
                    </select>

                    <input type="text" id="img-count" name="img-count" placeholder="Кол-во картинок" class="admin-input forclear">

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
<script src="js/jquery.liTranslit.js"></script>
<script src="js/ui.js"></script>
<script src="js/larger.js"></script>
<script>
    $(function(){
        $('#admin-insert-news #title').liTranslit({
            elAlias: $('#admin-insert-news #title-eng')
        });
    });
</script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>