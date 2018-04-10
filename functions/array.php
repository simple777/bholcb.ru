<?php

/*
 *description
 */
function news_GetArray ($news, $news_Count, $news_onPage)
{
    $news_array = array();
    $count = 0;

    for ($i = 1; $i <= $news_Count; $i++)
    {

            for ($j = 1; $j <= $news_onPage; $j++) {

                if (empty($news[$count])) { break; }

                $news_array[$i][$j] = $news[$count];
                $count++;
            }
    }

    return $news_array;
}