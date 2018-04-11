<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/about.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

	<div class="page-wrapper">

		<?php include_once  SITEROOTDIR.'views/main/header.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/nav.php'; ?>

		<div class="content-wrapper clearfix">

            <section class="notice-hidden">
                <p>Позиция для срочных объявлений [скрытая]</p>
            </section>

            <section class="breadcrumbs">
                <div class="breadcrumbs-text"></div>
            </section>
			
			<main role="main" class="content">

                <div class="about-structure-wrapper">
                    <div class="about-structure">

                        <h2>Структура</h2>

                            <div class="circle-menu">
                                <ul>
                                    <li><a class="spiritual" href="#">Методический отдел</a></li>
                                    <li><a class="occupational" href="#">Центр информации</a></li>
                                    <li><a class="emotional" href="#">Отдел обслуживания</a></li>
                                    <li><a class="environmental" href="#">Отдел комплектования</a></li>
                                    <li><a class="intellectual" href="#">Администрация</a></li>
                                    <li><a class="social" href="#">Сектор краеведения</a></li>
                                    <li><a class="physical" href="#">Сектор досуга</a></li>
                                </ul>
                            </div>

                    </div>

			</main>
			
		</div>

        <?php include_once  SITEROOTDIR.'views/main/section_services_ci.php'; ?>

		<?php include_once  SITEROOTDIR.'views/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.lazyload.min.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>
<script>
     $(document).ready(function () {
         $("img.lazy").lazyload({
             effect : "fadeIn"
         });
     });
</script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>