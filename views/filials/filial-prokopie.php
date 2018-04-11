<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<? echo SITEURL; ?>css/filials.css">
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

                <div class="filial-wrapper">
                    <div class="filial">

                        <div class="filial-common-info-content">
                            <div class="filial-common-info-content-in">
                                <div class="filial-common-info-content-in-text">

                                    <h2>Прокопьевская библиотека</h2>

                                    <div class="filial-common-info-time">
                                        <img src="<? echo SITEURL; ?>images/pages/filials/ico/clock.png" width="25px" height="25px">
                                        Режим работы: Пн. с 9:00 до 16:00, без обеда<br>
                                        Вт.-Пт., Вс. с 10:00 до 18:00, обед с 12:00 до 13:00
                                    </div>

                                    <div class="filial-common-info-boss">Заведующая: Нина Петровна Салтанова</div>

                                    <div class="filial-common-info-adress">613216 с. Прокопье, ул. Новая, д. 13</div>

                                    <br>

                                    <div class="filial-workers">

                                        <div class="filial-workers-item">
                                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-prokopie/saltanova-np.png" width="125px" height="125px">
                                            <div class="filial-workers-item-fio rounded-corners-5px" style="width: 130px">Салтанова Н.П.</div>
                                        </div>

                                    </div>

                                    <div class="filial-additional-info">
                                        <div class="filial-additional-info-history"><a href="#">Из истории библиотеки</a></div>
                                        <div class="filial-additional-info-press"><a href="#">На страницах печати</a></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="filial-common-info-bg">
                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-prokopie/filial-default-bg.jpg" class="rounded-corners">
                        </div>

                    </div>

                    <div class="filial-about" style="padding-top: 6em">

                        <p>Прокопьевская библиотека–филиал обслуживает население села Прокопье (административный центр
                        Прокопьевского сельского поселения) численностью 250 человек.</p>

                        <p>Фонд библиотеки насчитывает свыше 4 тыс. экземпляров печатных документов. Ежегодно услугами
                        библиотеки пользуются свыше 200 пользователей; им выдается свыше 4 тыс. экземпляров книг и
                        периодических изданий.</p>

                        <p>Направления работы: организация информационного обслуживания пользователей, привлечение
                        населения к чтению, досуговая деятельность.</p>

                    </div>

                </div>

			</main>
			
		</div>


        <?php include_once  __DIR__.'/../main/section_services_ci.php'; ?>

		<?php include_once  __DIR__.'/../main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<? echo SITEURL; ?>js/slider.js"></script>
<script src="<? echo SITEURL; ?>js/main.js"></script>
<script src="<? echo SITEURL; ?>js/goodvision.js"></script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>