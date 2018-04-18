
<?php foreach ($person_current as $item): ?>

    <?php $full_name = $item['f_name'].' '.$item['s_name'].' '.$item['t_name']; ?>

        <article class="person-item-wrapper">

            <header class="person-item-header">
                <div class="person-item-title"><h2><?php echo $full_name; ?></h2></div>
            </header>

            <div class="person-item-content">

                <div class="person-item-content-img">
                    <img src="<?php echo $item['imgprev']; ?>" width="400" height="300" class="lazy person-item-imgprev" alt="<?php echo $full_name; ?>">
                </div>

                <div class="person-item-content-data">

                    <?php echo $item['text'];?>

                </div>

            </div>

        </article>

<?php endforeach; ?>
