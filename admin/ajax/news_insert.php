<?php

require_once __DIR__.'/../../config.php';

require_once SITEROOTDIR.'models/news.php';
require_once SITEROOTDIR.'functions/sql.php';


//connect to database
$mysqli = sql_Connect();


    // Check connection
    if ($mysqli->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

   $res = news_Insert ($mysqli,
       $_POST['title'],
       $_POST['imgprev-small'],
       $_POST['imgprev-medium'],
       $_POST['publish_date'],
       $_POST['author'],
       $_POST['description'],
       $_POST['text'],
       $_POST['title-eng'],
       $_POST['category'],
       $_POST['tags'],
       $_POST['img-count']);

   if ($res) { echo 'Success!'; } else { echo 'Error!'; }


?>