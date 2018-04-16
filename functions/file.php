<?php

require_once __DIR__.'/../config.php';

/**********************************************************************************************************************/
/**
 *  file_create - создание директории на диске
 *
 *
 *
 */

function file_create($filename)
{
    $text = '<!DOCTYPE html>'.
        PHP_EOL.'<html lang="en">'.
        PHP_EOL.'<head>'.
        PHP_EOL.'<meta charset="UTF-8">'.
        PHP_EOL.'<title>.</title>'.
        PHP_EOL.'</head>'.
        PHP_EOL.'<body>'.
        PHP_EOL.'.'.
        PHP_EOL.'</body>'.
        PHP_EOL.'</html>';

// Открываем файл, флаг W означает - файл открыт на запись
    $f_hdl = fopen($filename, 'w');

// Записываем в файл $text
    fwrite($f_hdl, $text);

// Закрывает открытый файл
    fclose($f_hdl);
}



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

    file_create($path.'/index.html');

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