<?php


    require_once __DIR__.'/../config.php';
    require_once SITEROOTDIR.'functions/sql.php';
    require_once SITEROOTDIR.'models/vote.php';

    if (isset($_POST['id']))
    {

        $mysqli = sql_Connect();

        $res = vote_Set_Voices($mysqli, $_POST['id']);

        echo $res[0]['voices_count'];
    }

    else
        {
            echo "Ошибка: concurs_vote.php";
        }
