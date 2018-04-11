<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
	<meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
	<meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
	<title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/news.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

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

				<div class="news-wrapper-main-page">
                    <section class="news-main-page">
                        <?php if ($news) { include __DIR__ . '/news_limit_main_page.php'; } else { echo "<div class='news-item-empty'>Извините, новостей в этом месяце не было!</div>"; }?>
                    </section>

				</div>

                <div class="main-page-button"><a href="news.html">Читать все новости</a></div>

			</main>

		</div>


        <?php include_once  __DIR__.'/main/main_blocks.php'; ?>

        <?php include_once  __DIR__.'/main/section_services_ci.php'; ?>

		<?php include_once  __DIR__.'/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>



	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js?v10"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js?v10"></script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>