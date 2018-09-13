<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт - Издания</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/concurs.css?v1.0">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

<div id="test"></div>

<div class="page-wrapper">

    <?php include_once  __DIR__.'/main/header.php'; ?>

    <?php include_once  __DIR__.'/main/nav.php'; ?>

    <div class="content-wrapper clearfix">

        <section class="notice-hidden">
            <p>Позиция для срочных объявлений [скрытая]</p>
        </section>

        <section class="breadcrumbs">
            <div class="breadcrumbs-text"></div>
        </section>

        <main role="main" class="content">

            <section class="concurs-wrapper">

                <section class="concurs">

                    <?php

                        if ($concurs_Array) { include_once __DIR__.'/concurs_all_inc.php'; } else { echo "<div class='concurs-item-empty'>Извините, в данный момент нет проводимых конкурсов!</div>"; }

                    ?>

                </section>

            </section>

        </main>


    </div>


    <?php include_once  __DIR__.'/main/section_services_ci.php'; ?>

    <?php include_once  __DIR__.'/main/footer.php'; ?>

    <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.lazyload.min.js"></script>


<script type="text/javascript">

    $(document).ready(function () {
        $("img.lazy").lazyload({
            effect : "fadeIn"
        });
    });

</script>

<script src="<?php echo SITEURL; ?>js/slider.js"></script>
<script src="<?php echo SITEURL; ?>js/pagination.js?v1.0"></script>
<script src="<?php echo SITEURL; ?>js/main.js"></script>
<script src="<?php echo SITEURL; ?>js/goodvision.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>