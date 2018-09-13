<?php

require_once __DIR__.'/../../config.php';

require_once SITEROOTDIR.'models/person_single.php';
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
            $res = person_Insert($mysqli,
                $_POST['f_name'],
                $_POST['s_name'],
                $_POST['t_name'],
                $_POST['text'],
                $_POST['author'],
                $_POST['city'],
                $_POST['imgprev'],
                $_POST['name_eng'],
                $_POST['tags']);

            if ($res) { echo 'Success!'; } else { echo 'Error inserting person!'; }
        }
?>