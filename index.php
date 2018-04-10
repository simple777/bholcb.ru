<?php

    require_once __DIR__.'/config.php';

//if exist GET-request from news_add.php page - give contol to ctrl.get.php

if (!empty($_GET))
{

    include_once SITEROOTDIR.'controllers/ctrl.get.php';

}

/**********************************************************************************************************************/

else

//if not exist GET-request - show news_add.php page

{
    require_once SITEROOTDIR.'models/news.php';
    require_once SITEROOTDIR.'functions/array.php';
    require_once SITEROOTDIR.'functions/sql.php';

    //connect to database
    $mysqli = sql_Connect();

    /* Vars */
    //******************************************************************************************************************
    $newsLimit = 3;


    //Get last 3 news from database
    $news = news_Get_ByLimit($mysqli, $newsLimit);

    /* Views */
    //******************************************************************************************************************

    include __DIR__.'/views/index.php';
}


?>