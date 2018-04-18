<?php

function sql_Connect()
{
    $DB_SERVER 	= 'localhost';
    $DB_USER 	= 'root';
    $DB_PASS 	= '';
    $DB_NAME 	= 'libbh';

    //Create connection
    $mysqli = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);

    //Error reporting
    if ($mysqli->connect_error)
    {
        die("Mysqli: connection failed with error - ".$mysqli->connect_errno.' '.$mysqli->connect_error);
    }

    return $mysqli;
}

function sql_Query_assoc($mysqli, $query)
{
   if (!$results = $mysqli->query($query))

   {
       return false;
   }

   else

   {
       while($row = $results->fetch_assoc())
       {
           $ret[] = $row;
       }

       return $ret;
   }

}