<?php

/* Подстановка данных в запрос - подготовленные выражения */

require_once __DIR__.'/../functions/sql.php';


//get all news from database with limit
function news_Get_All ($mysqli, $limit)
{
    $query = "SELECT `id`, `title`, `imgprev_small`, `imgprev_medium`, `news_date`, `description`, `link`
              FROM `lib777_news`  
              ORDER BY `news_date` 
              DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}



//get news with date-filter
function news_Get_ByDate ($mysqli, $limit, $year, $month)
{

    $query = "
      SELECT `id`, `title`, `imgprev_small`, `imgprev_medium`, `news_date`, `description` , `link`
      FROM `lib777_news` 
      WHERE YEAR(`news_date`) = ".mysqli_real_escape_string($mysqli, $year)." 
      AND MONTH(`news_date`) = ".mysqli_real_escape_string($mysqli, $month)." 
      ORDER BY `news_date` 
      DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}

/*
//get news with date-filter and with first according BIG preview from news_img table
function news_Get_ByDate_vsImg ($mysqli, $limit, $year, $month)
{

    $query = "
      SELECT n.id, n.title, n.date, n.description, n.link, n.author, ni.imgpath, ni.imgdesc
      FROM `news` n, `news_img` ni
      WHERE n.id = ni.id_news
      AND YEAR(n.date ) = ".mysqli_real_escape_string($mysqli, $year)." 
      AND MONTH(n.date) = ".mysqli_real_escape_string($mysqli, $month)." 
      GROUP BY id
      ORDER BY news_date 
      DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}
*/

//get news with date-filter and with prev image
function news_Get_ByDate_vsImg ($mysqli, $limit, $year, $month)
{

    $query = "
      SELECT `id`, `title`, `imgprev_medium`,  `news_date`, `description` , `link`, `author`, `images_count`
      FROM `lib777_news`
      WHERE YEAR(news_date ) = ".mysqli_real_escape_string($mysqli, $year)." 
      AND MONTH(news_date) = ".mysqli_real_escape_string($mysqli, $month)." 
      GROUP BY id
      ORDER BY news_date 
      DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}



//get news with date-filter
function news_Get_ByLimit ($mysqli, $limit)
{

    $query = "
      SELECT `id`, `title`, `imgprev_small`, `news_date`, `description` , `link`, `images_count`
      FROM `lib777_news` 
      ORDER BY `news_date` 
      DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}



//get single news data by news-name
function news_Get_SingleByName ($mysqli, $news_link_str)
{
    $query = "
      SELECT `id`, `title`, `news_date`, `author`, `text`, `category`, `link`
      FROM `lib777_news` 
      WHERE `link` = '".mysqli_real_escape_string($mysqli, $news_link_str)."'";

    return $ret = sql_Query_assoc($mysqli, $query);
}


/*
//get single news images by news-id
function news_Get_Images ($mysqli, $news_id)
{
    $query = "
      SELECT `id`, `id_news`, `imgpath`, `imgdesc`
      FROM `news_img` 
      WHERE `id_news` = ".mysqli_real_escape_string($mysqli, $news_id);

    return $ret = sql_Query_assoc($mysqli, $query);
}
*/



//insert single news in database
function news_Insert ($mysqli, $title, $imgprev_small, $imgprev_medium, $news_date, $author, $description, $text, $link, $category, $tags, $images_count)
{
    if (!$news_date)
    {
        $news_date = date("Y-m-d H:i:s");
    }
        else
            {
                $news_date = date("Y-m-d H:i:s", strtotime($news_date));
            }

    $stmt = $mysqli->prepare("INSERT INTO lib777_news (title, imgprev_small, imgprev_medium, news_date, author, description, text, link, category, tags, images_count) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $title, $imgprev_small, $imgprev_medium, $news_date, $author, $description, $text, $link, $category, $tags, $images_count);

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    return true;
}