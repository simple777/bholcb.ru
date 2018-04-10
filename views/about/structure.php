<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo SITEURL;?>favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
	<meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
	<title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/main.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/good-vision.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/about.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="<?php echo SITEURL;?>js/html5shiv.js"></script>
	<![endif]-->

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


        <div id="back-top"><a href="#top"><div class="back-top-arrow"></div><span></span>Вверх</a></div>

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