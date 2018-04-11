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

                                    <h2>Иванцевская библиотека</h2>

                                    <div class="filial-common-info-time">
                                        <img src="<? echo SITEURL; ?>images/pages/filials/ico/clock.png" width="25px" height="25px">
                                        Режим работы: Пн.-Cб. с 12:00 до 17:00, без обеда
                                    </div>

                                    <div class="filial-common-info-phone">
                                        <img src="<? echo SITEURL; ?>images/pages/filials/ico/phone.png" width="25px" height="25px">
                                        Тел. (83364) 4-99-62 (дом культуры)
                                    </div>

                                    <div class="filial-common-info-boss">Заведующая: Надежда Николаевна Загумённова</div>

                                    <div class="filial-common-info-adress">13221 с. Иванцево, ул. Советская, д. 24</div>

                                    <br>

                                    <div class="filial-workers">

                                        <div class="filial-workers-item">
                                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-ivancevo/zagumennova-nn.png" width="125px" height="125px">
                                            <div class="filial-workers-item-fio rounded-corners-5px" style="width: 156px">Загумённова Н.Н.</div>
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
                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-ivancevo/filial-default-bg.jpg" class="rounded-corners">
                        </div>

                    </div>

                    <div class="filial-about" style="padding-top: 6em">

                        <p>Библиотека обслуживает жителей села Иванцево Поломского сельского поселения.</p>

                        <p>Фонд библиотеки составляет свыше 10 тыс. экземпляров печатных документов, за год к услугам
                        библиотеки обращается свыше 300 пользователей; им выдается свыше 10 тыс. экземпляров книг и
                        периодических изданий.</p>

                        <p>Основные направления работы – информационно-библиографическое обслуживание пользователей,
                        краеведческая деятельность, организация досуга, привлечение к чтению.</p>

                        <p>С 2017 года в должности заведующей библиотекой работает Надежда Николаевна Загумённова.</p>

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