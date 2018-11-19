<? require_once __DIR__.'/../config.php'; ?>

<?php $row_Count = 1; ?>


<?php //session is open ?>
<?php //get page number from session, cause we can change it by ajax ?>
<?php //get all vars from session ?>


<?php foreach ($_SESSION['concurs_Array'][$_SESSION['concurs_Page']] as $item): ?>

<div class="concurs-row clearfix">

    <article class="concurs-item-wrapper">

        <header class="concurs-item-header">
            <div class="concurs-item-title"><h2><?php echo '&laquo;'.trim($item['title'], ' ').'&raquo;'; ?></h2></div>
        </header>

        <div class="concurs-item-content-img">
            <img src="<?php echo $item['imgprev_medium']; ?>" width="800" height="600" class="lazy news-item-imgprev" alt="<?php echo $item['title']; ?>">
        </div>

        <div class="concurs-item-date">
            <p>Срок проведения: с <?php echo date("d.m.Y", strtotime($item['concurs_date'])); ?> по <?php echo date("d.m.Y", strtotime($item['concurs_off_date'])); ?></p>
        </div>

        <div class="concurs-item-desciption"><?php echo $item['description']; ?></div>
        <div class="concurs-item-link"><a href="<?php echo SITEURL;?>concurs/<?php echo $item['link'].'.html'; ?>">Подробнее</a></div>
        <div class="concurs-item-link"><a href="<?php echo SITEURL;?>concurs/2018-nnm/vote.html" style="background: #50a52d;">Результаты творческого конкурса</a></div>

    </article>

</div>

    <?php $row_Count++; ?>

<?php endforeach; ?>

<?php if ($_SESSION['concurs_Count'] > $_SESSION['concurs_Page'] * CONCURS_ONPAGE) : ?>

    <div class="concurs-show-more clearfix">
        <div class="concurs-show-more-but" id="concurs-show-more-but-id">Показать еще</div>
    </div>

<?php endif; ?>
