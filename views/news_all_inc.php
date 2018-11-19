<? require_once __DIR__.'/../config.php'; ?>

<?php $row_Count = 1; ?>


<?php //session is open ?>
<?php //get page number from session, cause we can change it by ajax ?>
<?php //get all vars from session, views\news_all_inc.php cant see them otherwise - when working by ajax(news_showmore.php) ?>


<?php foreach ($_SESSION['news_Array'][$_SESSION['page']] as $item): ?>

<div class="news-row clearfix">

    <article class="news-item-wrapper">

        <header class="news-item-header">
            <div class="news-item-date">
                <?php

                $news_date_str = explode('.', date('j.n.Y', strtotime($item['news_date'])));

                //month modify: number to word
                switch ($news_date_str[1])

                {
                    case 1:  { $news_date_str[1] = 'январь';    break; }
                    case 2:  { $news_date_str[1] = 'февраль';   break; }
                    case 3:  { $news_date_str[1] = 'март';      break; }
                    case 4:  { $news_date_str[1] = 'апрель';    break; }
                    case 5:  { $news_date_str[1] = 'май';       break; }
                    case 6:  { $news_date_str[1] = 'июнь';      break; }
                    case 7:  { $news_date_str[1] = 'июль';      break; }
                    case 8:  { $news_date_str[1] = 'август';    break; }
                    case 9:  { $news_date_str[1] = 'сентябрь';  break; }
                    case 10: { $news_date_str[1] = 'октябрь';   break; }
                    case 11: { $news_date_str[1] = 'ноябрь';    break; }
                    case 12: { $news_date_str[1] = 'декабрь';   break; }

                    default: $news_date_str[1] = 'январь';
                } //switch

                //if date number is single digit - add zero before it

                if (strlen($news_date_str[0]) < 2) { $news_date_str[0] = '0'.$news_date_str[0]; }

                echo "<div class='news-item-date-month'>".$news_date_str[1]."</div><div class='news-item-date-number'>".$news_date_str[0]."</div>";

                ?>
            </div>
            <div class="news-item-title"><h2><?php echo '&laquo;'.trim($item['title'], ' ').'&raquo;'; ?></h2></div>
        </header>




        <div class="news-item-content clearfix">

            <div class="news-item-content-img">
                <img src="<?php echo $item['imgprev_medium']; ?>" width="400" height="300" class="lazy news-item-imgprev" alt="<?php echo $item['title']; ?>">
            </div>

            <div class="news-item-content-data">
                <div class="news-item-hover-block"><a href="<?php echo 'news/'.$item['link'].'.html'; ?>" class="news-item-hover-link" target="_blank"><div class="news-item-hover-link-block"></div></a></div>
                <p class="news-item-text"><?php echo $item['description']; ?></p>
                <p class="news-item-author"><?php echo $item['author']; ?></p>

                <span class="news-all-item-images-count">
                    <img src="<?php echo SITEURL?>images/main/images-count.png">
                    <span><?php echo $item['images_count']; ?></span>
                </span>

            </div>

        </div>

    </article>

</div>

    <?php $row_Count++; ?>

<?php endforeach; ?>

<?php if ($_SESSION['news_Count'] > $_SESSION['page'] * NEWS_ONPAGE) : ?>

    <div class="news-show-more clearfix">
        <div class="news-show-more-but" id="news-show-more-but-id">Показать еще</div>
    </div>

<?php endif; ?>
