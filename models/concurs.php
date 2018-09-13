<?php

require_once __DIR__.'/../functions/sql.php';

/**********************************************************************************************************************/

function concurs_Get_all_ex_archive ($mysqli, $limit)
{
    $query = "SELECT `id`, `title`, `imgprev_small`, `imgprev_medium`, `term_link`, `concurs_date`, `concurs_off_date`, `description`, `link`
              FROM `lib777_concurs`  
              WHERE `archive` = 0
              ORDER BY `concurs_date` 
              DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}

//get single concurs data by link
function concurs_Get_SingleByName ($mysqli, $concurs_link_str)
{
    $query = "
      SELECT `id`, `title`, `imgprev_medium`, `concurs_date`, `concurs_off_date`, `term_link`, `description`, `text`
      FROM `lib777_concurs` 
      WHERE `link` = '".mysqli_real_escape_string($mysqli, $concurs_link_str)."'";

    return $ret = sql_Query_assoc($mysqli, $query);
}

/**********************************************************************************************************************/

function concurs_Insert ($mysqli, $title, $imgprev_small, $imgprev_medium, $term_link, $concurs_date, $concurs_off_date, $description, $text, $link, $tags)
{
        if (!$concurs_date)
        {
            $concurs_date = date("Y-m-d H:i:s");
        }
            else
                {
                    $concurs_date = date("Y-m-d H:i:s", strtotime($concurs_date));
                }

        if (!$concurs_off_date)
        {
            $concurs_off_date = date("Y-m-d H:i:s");
        }
        else
        {
            $concurs_off_date = date("Y-m-d H:i:s", strtotime($concurs_off_date));
        }

    $stmt = $mysqli->prepare("INSERT INTO lib777_concurs (title, imgprev_small, imgprev_medium, term_link, concurs_date, concurs_off_date, description, text, link, tags) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $title, $imgprev_small, $imgprev_medium, $term_link, $concurs_date, $concurs_off_date, $description, $text, $link, $tags);

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    return true;
}