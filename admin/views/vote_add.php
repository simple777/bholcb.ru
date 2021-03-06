<?php

require_once __DIR__.'/../../config.php';

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
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/main.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>admin/css/ui.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div id="category" class="hidden">vote</div>

<div class="admin-page-wrapper">

    <div class="admin-header clearfix"><p>Панель управления</p></div>

    <div class="admin-content-wrapper clearfix">

        <aside class="admin-menu-left">

            <?php include_once  SITEROOTDIR.'admin/views/main/nav.php'; ?>

        </aside>

        <aside class="admin-content-wrapper-in">

            <?php include_once  SITEROOTDIR.'admin/views/main/controls.php'; ?>

            <div class="admin-content">

                <form action="<?php echo SITEURL;?>admin/ajax/vote_insert.php" method="POST" id="admin-insert-vote" name="admin-insert-vote" class="admin-form">

                    <legend>Добавить голосование</legend>

                    <input type="text" id="name" name="name" placeholder="Название голосования" class="admin-input" value="<?php echo $dir_name; ?>" required>

                    <input type="text" id="name_eng" name="name_eng" placeholder="Vote name" class="admin-input" value="" required>

                    <input type="text" id="path" name="path" class="admin-input" disabled value="<?php echo $dir_path; ?>">
                    <input type="text" id="url" name="url" class="admin-input" disabled value="<?php echo $dir_url; ?>">

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
<script src="<?php echo SITEURL;?>admin/js/root.js"></script>
<script src="<?php echo SITEURL;?>admin/js/ui.js"></script>
<script src="<?php echo SITEURL;?>admin/js/larger.js"></script>
<script>
    $(function(){
        $('#admin-insert-vote #name').liTranslit({
            elAlias: $('#admin-insert-vote #name_eng')
        });
    });
</script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>