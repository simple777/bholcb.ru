<?php

require_once __DIR__.'/../models/news.php';
require_once __DIR__.'/../functions/array.php';

session_start();

$newsLimit = $_SESSION['newsLimit'];
$news_onPage =  $_SESSION['news_onPage'];
$page =  1; //page always must be 1
$_SESSION['page'] = 1; //reset page Counter


$mysqli = sql_Connect();


if (isset($_POST['year']) && isset($_POST['month']))

{

    $news = news_Get_ByDate_vsImg($mysqli, $newsLimit, $_POST['year'], $_POST['month']);

    $news_Count = count($news);

    $_SESSION['news_Count'] = $news_Count;


    if ($news_Count != 0)
        {
            $news_Array = news_GetArray ($news, $news_Count, $news_onPage);
            $_SESSION['news_Array'] = $news_Array;
            include __DIR__ . '/../views/news_all_inc.php';
        }
    else
        {
            echo "<div class='news-item-empty'>Извините, новостей в этом месяце не было!</div>";
        }

}

else //POST is empty

{

    echo "<div class='news-item-empty'>Проверьте дату и время на своем компьютере! Если ваши настрайки верны - обновите страницу сайта!</div>";

}