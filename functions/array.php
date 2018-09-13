<?php

/*
 *description
 */
function object_GetArray ($rows, $rows_Count, $rows_onPage)
{
    $ret_array = array();
    $count = 0;

    for ($i = 1; $i <= $rows_Count; $i++)
    {

            for ($j = 1; $j <= $rows_onPage; $j++) {

                if (empty($rows[$count])) { break; }

                $ret_array[$i][$j] = $rows[$count];
                $count++;
            }
    }

    return $ret_array;
}