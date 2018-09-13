<?php

session_start();

    //increment page number

    ++$_SESSION['concurs_Page'];


    //if page number is valid

    if ( $_SESSION['concurs_Page'] <= ceil($_SESSION['concurs_Count'] / $_SESSION['concurs_onPage']) )

    {
        include __DIR__ . '/../views/concurs_all_inc.php'; //return it to view
    }

