<?php

/*
 *
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

*/



//insert single person in database
function person_Insert ($mysqli, $f_name, $s_name, $t_name, $text, $author, $city, $imgprev, $name_eng, $tags)
{
    $stmt = $mysqli->prepare("INSERT INTO lib777_person (f_name, s_name, t_name, text, author, city, imgprev, link, tags) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $f_name, $s_name, $t_name, $text, $author, $city, $imgprev, $name_eng, $tags);

// set parameters and execute

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    return true;
}