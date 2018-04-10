<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<? echo SITEURL; ?>favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
	<meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
	<title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
	<link rel="stylesheet" href="<? echo SITEURL; ?>css/normalize.min.css">
	<link rel="stylesheet" href="<? echo SITEURL; ?>css/main.css">
	<link rel="stylesheet" href="<? echo SITEURL; ?>css/good-vision.css">
	<link rel="stylesheet" href="<? echo SITEURL; ?>css/news.css">
	<link rel="stylesheet" href="<? echo SITEURL; ?>css/simplelightbox.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!--[if lt IE 9]>
	<script src="<? echo SITEURL; ?>js/html5shiv.js"></script>
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
			
			<main role="main" class="content-news-single">

				<div class="news-single-wrapper">

                    <section class="news-single-content-wrapper">

                        <?php include_once __DIR__.'/news_single_inc.php'; ?>

                    </section>

				</div>

			</main>

		</div>


        <?php include_once  __DIR__.'/main/footer.php'; ?>

        <div id="back-top"><a href="#top"><div class="back-top-arrow"></div><span></span>Вверх</a></div>

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