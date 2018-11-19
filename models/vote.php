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



function vote_Get_All ($mysqli)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `lib777_vote_nnm`";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Insert ($mysqli, $work_title, $work_url)
{
    $stmt = $mysqli->prepare("INSERT INTO lib777_vote_nnm (work_title, work_img) VALUES (?, ?)");
    $stmt->bind_param("ss", $work_title, $work_url);

// set parameters and execute

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    return true;
}

function vote_Set_Voices ($mysqli, $id)
{
    $query = "
      UPDATE `lib777_vote_nnm` SET `voices_count` = `voices_count` + 1 
      WHERE id = ".(int)$id;

    $res = $mysqli->query($query);

    if ($res)
    {
    $query = "
      SELECT `voices_count` 
      FROM `lib777_vote_nnm` 
      WHERE id = ".(int)$id;


      return $ret = sql_Query_assoc($mysqli, $query);
    }

    else return false;
}