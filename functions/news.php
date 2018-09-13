<?php

require_once __DIR__.'/../config.php';

/*
 *description
 */

function news_Filter ($year, $month)
{
    session_start();

    //$page =  1; //page always must be 1
    $_SESSION['page'] = 1; //reset page Counter


    $mysqli = sql_Connect();


    if (isset($year) && isset($month))

    {

        $news = news_Get_ByDate_vsImg($mysqli, NEWS_LIMIT_ALL, $year, $month);

        $news_Count = count($news);

        $_SESSION['news_Count'] = $news_Count;


        if ($news_Count != 0)
        {
            $news_Array = object_GetArray ($news, $news_Count, NEWS_ONPAGE);
            $_SESSION['news_Array'] = $news_Array;

            include __DIR__ . '/../views/news_all_inc.php';
        }
        else
        {
            echo "<div class='news-item-empty'>Извините, новостей в этом месяце не было!</div>";
        }

    }

    else

    {

        echo "<div class='news-item-empty'>Проверьте дату и время на своем компьютере! Если ваши настрайки верны - обновите страницу сайта!</div>";

    }
}