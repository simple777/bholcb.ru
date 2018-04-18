<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт - Издания</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<? echo SITEURL; ?>css/news.css?v15">
    <link rel="stylesheet" href="<? echo SITEURL; ?>css/simplelightbox.min.css">
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
			
			<main role="main" class="content-news-single">

				<div class="news-single-wrapper">

                    <section class="news-single-content-wrapper">

                        <?php include_once __DIR__.'/news_single_inc.php'; ?>

                    </section>

				</div>

			</main>

		</div>


        <?php include_once  __DIR__.'/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.lazyload.min.js"></script>
<script src="<?php echo SITEURL; ?>js/slider.js"></script>
<script src="<?php echo SITEURL; ?>js/main.js"></script>
<script src="<?php echo SITEURL; ?>js/goodvision.js"></script>
<script src="<?php echo SITEURL; ?>js/simple-lightbox.min.js"></script>
<script>
    $(document).ready(function () {
        $("img.lazy").lazyload({
            effect : "fadeIn"
        });

        var gallery = $('.gallery a').simpleLightbox();
    });
</script>

</body>

</html>