<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/vote.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/larger.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

	<div class="page-wrapper">

        <div class="modal-windows" id="modal-windows-vote"><p>Спасибо за ваш голос!</p></div>

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

                <div class="vote-wrapper">
                    <div class="vote">

                        <h2>Результаты творческого конкурса</h2>


                        <!--<p style="color: #e0dcd7; text-align: center" id="vote-note">Можно проголосовать только за одну работу</p>-->

                        <?php

                        require_once __DIR__.'/../../../config.php';
                        require_once SITEROOTDIR.'functions/sql.php';
                        require_once SITEROOTDIR.'models/vote.php';

                        //connect to database
                        $mysqli = sql_Connect();

                        $vote_array = vote_Get_All($mysqli);

                        if ($vote_array) {

                        ?>

                        <?php foreach ($vote_array as $item): ?>


                        <div class='vote-image-wrapper'>
                            <img src='<?php echo $item['work_img']; ?>' class='minimized' alt='<?php echo $item['work_title']; ?>'><br>
                            <span><?php echo $item['work_title']; ?></span>
                            <div class='vote-count' id="v<?php echo $item['id']; ?>">Голосов:&nbsp;<?php echo $item['voices_count']; ?></div>
                            <!--<div class='vote-btn' id='<?php //echo $item['id']; ?>'>Нравится эта!</div>-->
                        </div>


                        <?php endforeach; ?>



                       <?php

                        } else { echo "<div class='concurs-item-empty'>Извините, данные временно недоступны!</div>"; }

                        ?>


                    </div>

			</main>
			
		</div>

        <?php include_once  SITEROOTDIR.'views/main/section_services_ci.php'; ?>

		<?php include_once  SITEROOTDIR.'views/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

	</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.lazyload.min.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/vote.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>
<script src="<?php echo SITEURL;?>js/larger.js"></script>
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