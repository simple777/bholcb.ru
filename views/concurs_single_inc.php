
<?php foreach ($concurs_current as $item): ?>

<article class="concurs-single">

    <header class="concurs-single-header">
        <div class="concurs-single-date">
            <?php

                $concurs_date_str = explode('.', date('j.n.Y', strtotime($item['concurs_date'])));

                //month modify: number to word
                switch ($concurs_date_str[1])

                {
                    case 1:  { $concurs_date_str[1] = 'январь';    break; }
                    case 2:  { $concurs_date_str[1] = 'февраль';   break; }
                    case 3:  { $concurs_date_str[1] = 'март';      break; }
                    case 4:  { $concurs_date_str[1] = 'апрель';    break; }
                    case 5:  { $concurs_date_str[1] = 'май';       break; }
                    case 6:  { $concurs_date_str[1] = 'июнь';      break; }
                    case 7:  { $concurs_date_str[1] = 'июль';      break; }
                    case 8:  { $concurs_date_str[1] = 'август';    break; }
                    case 9:  { $concurs_date_str[1] = 'сентябрь';  break; }
                    case 10: { $concurs_date_str[1] = 'октябрь';   break; }
                    case 11: { $concurs_date_str[1] = 'ноябрь';    break; }
                    case 12: { $concurs_date_str[1] = 'декабрь';   break; }

                    default: $concurs_date_str[1] = 'январь';
                } //switch

                //if date number is single digit - add zero before it

                if (strlen($concurs_date_str[0]) < 2) { $concurs_date_str[0] = '0'.$concurs_date_str[0]; }

                echo "<div class='concurs-single-date-month'>" .$concurs_date_str[1]."</div><div class='concurs-single-date-number'>".$concurs_date_str[0]."</div>";

            ?>
        </div>
        <div class="concurs-single-title"><h2><?php echo '&laquo;'.trim($item['title'], ' ').'&raquo;'; ?></h2></div>
    </header>

    <div class="concurs-item-content-img">
        <img src="<?php echo $item['imgprev_medium']; ?>" width="800" height="600" class="lazy news-item-imgprev" alt="<?php echo $item['title']; ?>">
    </div>

    <section class="concurs-single-content">

        <div class="concurs-single-dates">
            <p>Срок проведения: с <?php echo date("d.m.Y", strtotime($item['concurs_date'])); ?> по <?php echo date("d.m.Y", strtotime($item['concurs_off_date'])); ?></p>
        </div>

        <div class="concurs-item-terms"><a href="<?php echo $item['term_link']; ?>" target="_blank">Положение (Яндекс.Диск)</a></div>

        <div class="concurs-item-desciption"><?php echo $item['description']; ?></div>

        <div><?php echo $item['text']; ?></div>

    </section>


    <footer class="concurs-single-footer">&#9998;&nbsp;Администрация</footer>

</article>

<?php endforeach; ?>
