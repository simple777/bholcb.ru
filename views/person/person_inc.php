<?php //session is open ?>
<?php //get page number from session, cause we can change it by ajax ?>
<?php //get all vars from session, views\news_all_inc.php cant see them otherwise - when working by ajax(news_showmore.php) ?>

<?php $cycle_count = 0;?>

<div class="news-row-main-page clearfix">

<?php foreach ($news as $item): ?>

        <article class="news-item-wrapper-main-page">

            <div class="news-item-content-main-page">

                <div class="news-item-hover-block-main-page"><a href="<?php echo 'news/'.$item['link'].'.html'; ?>" class="news-item-hover-link-main-page"></a></div>

                <header>
                    <h3 class="news-item-header-main-page"><?php echo $item['title']; ?></h3>
                </header>
                <p class="news-item-text-main-page"><?php echo $item['description']; ?></p>
                <span class="news-item-images-count">
                    <img src="<?php echo SITEURL?>images/main/images-count.png">
                    <span><?php echo $item['images_count']; ?></span>
                </span>

            </div>

            <div class="news-item-side-info-main-page">
                <img class="news-item-imgprev-main-page" src="<?php echo $item['imgprev_small']; ?>" width="170" height="170" alt="<?php echo $item['title']; ?>">
                <div class="news-item-date-main-page"><?php echo date('d.m.Y', strtotime($item['news_date'])); ?></div>
            </div>

        </article>

<?php endforeach; ?>

</div>
