<?php

session_start();

    //increment page number

    ++$_SESSION['page'];


    //if page number is valid

    if ( $_SESSION['page'] <= ceil($_SESSION['news_Count'] / $_SESSION['news_onPage']) )

    {
        include __DIR__ . '/../views/news_all_inc.php'; //return it to view
    }

