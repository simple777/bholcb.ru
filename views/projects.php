<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт - Издания</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/projects.css">
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

                <div class="projects-wrapper">
                    <div class="projects">

                        <h2>Наши проекты</h2>

                        <div class="content-line-wrapper-2">

                                <div class="content-line-block-2" style="width: 100%">
                                    <div class="content-line-block-content">
                                        <div class="content-line-block-content-in">
                                            <div class="content-line-block-content-in-text">
                                                <h2 class="content-line-block-header">Виртуальные выставки</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-line-block-bg">
                                        <img src="<?php echo SITEURL;?>images/pages/projects/2018/2018-virtecs.jpg">
                                    </div>

                                    <a href="<?php echo SITEURL;?>projects/virtual-tour.html" class="content-line-block-link"></a>
                                </div>

                                <div class="content-line-block-2">
                                    <div class="content-line-block-content">
                                        <div class="content-line-block-content-in">
                                            <div class="content-line-block-content-in-text">
                                                <h2 class="content-line-block-header">Литературная карта Белохолуницкого района</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-line-block-bg">
                                        <img src="<?php echo SITEURL;?>images/pages/projects/2018/2018-lit-map.jpg">
                                    </div>

                                    <a href="index.php" class="content-line-block-link"></a>
                                </div>

                                <div class="content-line-block-2">
                                    <div class="content-line-block-content">
                                        <div class="content-line-block-content-in">
                                            <div class="content-line-block-content-in-text">
                                                <h2 class="content-line-block-header">Памятные даты военной истории</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-line-block-bg">
                                        <img src="<?php echo SITEURL;?>images/pages/projects/2018/2018-military-history.jpg">
                                    </div>

                                    <a href="index.php" class="content-line-block-link"></a>
                                </div>

                        </div>


                        <div class="content-line-wrapper-2">

                            <div class="content-line-block-2">
                                <div class="content-line-block-content">
                                    <div class="content-line-block-content-in">
                                        <div class="content-line-block-content-in-text">
                                            <h2 class="content-line-block-header">Читаем Марихина вместе</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-line-block-bg">
                                    <img src="<?php echo SITEURL;?>images/pages/projects/2018/2018-mnn.jpg">
                                </div>

                                <a href="index.php" class="content-line-block-link"></a>
                            </div>

                            <div class="content-line-block-2">
                                <div class="content-line-block-content">
                                    <div class="content-line-block-content-in">
                                        <div class="content-line-block-content-in-text">
                                            <h2 class="content-line-block-header">Имена героев на карте района</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-line-block-bg">
                                    <img src="<?php echo SITEURL;?>images/pages/projects/2018/2018-wow-names.jpg">
                                </div>

                                <a href="index.php" class="content-line-block-link"></a>
                            </div>

                        </div>

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