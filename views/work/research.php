<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/work.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/tables.css">
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

                <div class="work-research-wrapper">
                    <div class="work-research">

                        <h2>Наши исследования</h2>


                        <h3>2011 год</h3>

                        <table class="table-two-cols">

                            <tr>
                                <td>
                                    <div class="table-content-title">«Книга в жизни замечательных людей нашего города»</div>
                                    <div class="table-content-desc">Опыт социологического опроса</div>
                                </td>

                                <td>
                                    <div class="table-content-files">
                                        <div class="table-content-files-image"><a href="http://bholcb.ru/files/research/kniga-v-gizni-zamech.zip" target="_blank"><img src="<?php echo SITEURL;?>images/ui/button-save.png" width="40px" height="40px"></a></div>
                                        <div class="table-content-files-text">
                                            <a href="http://bholcb.ru/files/research/kniga-v-gizni-zamech.zip" class="table-content-link" target="_blank">Скачать</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>

                        </table>

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
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>
<script src="<?php echo SITEURL;?>js/readers.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>