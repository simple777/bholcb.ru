
<?php foreach ($news_current as $item): ?>

<article class="news-single">

    <header class="news-single-header">
        <div class="news-single-date">
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

                echo "<div class='news-single-date-month'>" .$news_date_str[1]."</div><div class='news-single-date-number'>".$news_date_str[0]."</div>";

            ?>
        </div>
        <div class="news-single-title"><h2><?php echo '&laquo;'.trim($item['title'], ' ').'&raquo;'; ?></h2></div>
    </header>

    <!-- <div class="news-single-previmg"><img src=""></div> -->

    <section class="news-single-content">

        <div class="go_to" data-goto=".gallery-wrapper">&darr;&nbsp;&nbsp;Перейти к галлерее&nbsp;&nbsp;&darr;</div>

        <?php echo $item['text']; ?>
    </section>


    <footer class="news-single-footer"><?php echo '&#9998;&nbsp;'.$item['author']; ?></footer>

</article>

<?php endforeach; ?>
