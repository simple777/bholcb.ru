<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт - Издания</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/print.css">
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

                <div class="print-wrapper">
                    <div class="print">

                        <h2>Печать фотографий!</h2>

                        <p>г. Белая Холуница, ул. Здравоохранения 1</p>
                        <p>(центральный вход)</p>
                        <p>Центр информации - первый этаж библиотеки</p>
                        <p>тел. 4-15-01</p>

                    </div>
                </div>

			</main>
			
		</div>

        <?php include_once  __DIR__.'/main/section_services_ci.php'; ?>

		<?php include_once  __DIR__.'/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>