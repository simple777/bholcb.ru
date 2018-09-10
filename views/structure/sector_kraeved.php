<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<? echo SITEURL; ?>css/about-structure.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

	<div class="page-wrapper">

		<?php include_once  __DIR__.'/../main/header.php'; ?>

        <?php include_once  __DIR__.'/../main/nav.php'; ?>

		<div class="content-wrapper clearfix">

            <section class="notice-hidden">
                <p>Позиция для срочных объявлений [скрытая]</p>
            </section>

            <section class="breadcrumbs">
                <div class="breadcrumbs-text"></div>
            </section>

			<main role="main" class="content">

                <div class="department-wrapper">
                    <div class="department kraeved">

                        <div class="department-common-info-content">
                            <div class="department-common-info-content-in">
                                <div class="department-common-info-content-in-text">

                                    <h2>Сектор краеведения</h2>


                                        <div class="department-about">

                                            <img src="<?php echo SITEURL; ?>images/pages/structure/sector_kraeved/kraeved.jpg" width="800px" height="600px" class="department-prev">
                                            <div>Организован 1 апреля 2008 г.</div>
                                            <img src="<?php echo SITEURL; ?>images/pages/filials/ico/phone.png" width="25px" height="25px">
                                            Тел. (83364) 4-15-01
                                            <div>Заведующая: Михалева Е.Л.</div>

                                        </div>

                                        <h2>Направления деятельности</h2>

                                        <ul class="department-about-list">
                                            <li>&nbsp;Удовлетворение потребностей пользователей в краеведческой информации</li>
                                            <li>&nbsp;Воспитание любви к родному краю, знакомство с его обычаями, обрядами и традициями</li>
                                            <li>&nbsp;Формирование единого документального краеведческого фонда, сохранение культурного наследия</li>
                                        </ul>

                                        <h2>Коллектив</h2>

                                        <div class="department-workers-item">
                                            <div class="department-workers-item-main">
                                                <img src="<?php echo SITEURL; ?>images/pages/structure/sector_kraeved/people/mihaleva-el.png" width="180px" height="180px">
                                            </div>
                                            <div class="department-workers-item-contacts">
                                                <div class="department-fio">Михалева<br> Елена Леонидовна</div>
                                            </div>
                                        </div>

                                        <div class="department-workers-item">
                                            <div class="department-workers-item-main">
                                                <img src="<?php echo SITEURL; ?>images/pages/structure/sector_kraeved/people/reneva-el.png" width="180px" height="180px">
                                            </div>
                                            <div class="department-workers-item-contacts">
                                                <div class="department-fio">Ренева<br> Елена Леонидовна</div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="department-about"></div>

                </div>

			</main>

		</div>


        <?php include_once  __DIR__.'/../main/section_services_ci.php'; ?>

		<?php include_once  __DIR__.'/../main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>js/slider.js"></script>
<script src="<?php echo SITEURL; ?>js/main.js"></script>
<script src="<?php echo SITEURL; ?>js/goodvision.js"></script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>