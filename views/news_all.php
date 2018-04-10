<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo SITEURL; ?>favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/good-vision.css">
    <link rel="stylesheet" href="<?php echo SITEURL; ?>css/news.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

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

            <section class="news-wrapper">

                <section class="news-filter-wrapper">
                    <div class="news-filter-year">
                        <span class="news-filter-year-item">2018</span>
                        <span class="news-filter-year-item">2017</span>
                        <span class="news-filter-year-item">2016</span>
                        <span class="news-filter-year-item">2015</span>
                        <span class="news-filter-year-item">2014</span>
                        <span class="news-filter-year-item">2013</span>
                    </div>

                    <div class="news-filter-month">
                        <span class="news-filter-month-item" data-id="1">Янв.</span>
                        <span class="news-filter-month-item" data-id="2">Фев.</span>
                        <span class="news-filter-month-item" data-id="3">Март</span>
                        <span class="news-filter-month-item" data-id="4">Апр.</span>
                        <span class="news-filter-month-item" data-id="5">Май</span>
                        <span class="news-filter-month-item" data-id="6">Июнь</span>
                        <span class="news-filter-month-item" data-id="7">Июль</span>
                        <span class="news-filter-month-item" data-id="8">Авг.</span>
                        <span class="news-filter-month-item" data-id="9">Сент.</span>
                        <span class="news-filter-month-item" data-id="10">Окт.</span>
                        <span class="news-filter-month-item" data-id="11">Ноябрь</span>
                        <span class="news-filter-month-item" data-id="12">Дек.</span>
                    </div>
                </section>

                <section class="news">

                    <?php if ($news_Array) { include_once __DIR__.'/news_all_inc.php'; } else { echo "<div class='news-item-empty'>Извините, новостей в этом месяце не было!</div>"; }?>

                </section>

            </section>

        </main>


    </div>


    <?php include_once  __DIR__.'/main/section_services_ci.php'; ?>

    <?php include_once  __DIR__.'/main/footer.php'; ?>

    <div id="back-top"><a href="#top"><div class="back-top-arrow"></div><span></span>Вверх</a></div>

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
<script src="<?php echo SITEURL; ?>js/pagination.js"></script>
<script src="<?php echo SITEURL; ?>js/main.js"></script>
<script src="<?php echo SITEURL; ?>js/goodvision.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>