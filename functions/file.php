<?php

require_once __DIR__.'/../config.php';



/**********************************************************************************************************************/
/**
 *  dir_make - создание директории на диске
 *
 * string $dir - директория, в которой выполнить тело функции
 *
 */

function dir_make($base, $dir_name)
{
    $path = $base.$dir_name;

    $dir = mkdir($path);

    if ($dir) return $path; else return false;

}


/**********************************************************************************************************************/
/**
 *  dir_get_folders - получить все поддиректории
 *
 * string $path - абс. путь к директории, в которой выполнить тело функции
 *
 */

function dir_get_folders($path)
{
    $dir = opendir($path);
    $res = '';

    while($file = readdir($dir)) {
        if (is_dir($path.$file) && $file != '.' && $file != '..') {
            $res = $res.$file.";";
        }
    }

    return $res;
}