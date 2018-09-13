<?php

require_once __DIR__.'/../../config.php';

require_once SITEROOTDIR.'models/concurs.php';
require_once SITEROOTDIR.'functions/sql.php';


//connect to database
$mysqli = sql_Connect();


    // Check connection
    if ($mysqli->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    else
        {
            $res = concurs_Insert ($mysqli,
                $_POST['title'],
                $_POST['imgprev-small'],
                $_POST['imgprev-medium'],
                $_POST['term_link'],
                $_POST['concurs_date'],
                $_POST['concurs_off_date'],
                $_POST['description'],
                $_POST['text'],
                $_POST['title-eng'],
                $_POST['tags']);

            if ($res) { echo 'Success!'; } else { echo 'Error inserting concurs!'; }

        }
?>