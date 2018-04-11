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

                                    <h2>Каменская библиотека</h2>

                                    <div class="filial-common-info-time">
                                        <img src="<? echo SITEURL; ?>images/pages/filials/ico/clock.png" width="25px" height="25px">
                                        Режим работы: Пн, Ср, Пт. с 12:00 до 18:00, без обеда
                                    </div>

                                    <div class="filial-common-info-boss">Заведующая: Ирина Алексеевна Рогозина</div>

                                    <div class="filial-common-info-adress">613226 п. Каменное, ул. Школьная, д. 6</div>

                                    <br>

                                    <div class="filial-workers">

                                        <div class="filial-workers-item">
                                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-kamenskoe/rogozina-ia.png" width="125px" height="125px">
                                            <div class="filial-workers-item-fio rounded-corners-5px">Рогозина И.А.</div>
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
                            <img src="<? echo SITEURL; ?>images/pages/filials/filial-kamenskoe/filial-default-bg.jpg" class="rounded-corners">
                        </div>

                    </div>

                    <div class="filial-about">

                        <p>Каменская библиотека–филиал обслуживает население посёлка Каменное Троицкого сельского
                        поселения численностью 130 человек. Фонд библиотеки насчитывает свыше 4 тыс. экземпляров
                        печатных документов, ежегодно библиотеку посещает свыше 180 пользователей, им выдается свыше
                        6 тыс. экземпляров книг и периодических изданий.</p>

                        <p>Основное направление работы: досуговая деятельность.</p>

                        <p>Библиотека служит местом общения для жителей посёлка, здесь проводятся досуговые мероприятия:
                        вечера, праздники, конкурсы, викторины, беседы. Библиотека работает в тесном контакте со школой,
                        клубом и администрацией поселения.</p>

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