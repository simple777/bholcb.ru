<?php

require_once __DIR__.'/../config.php';

/**
 * void square_preview - создание квадратных превью из JPEG-файлов
 *
 * string $file - имя файла оригинального изображения
 * int $size - размер стороны квадрата превью
 *
 */

function img_preview_square($file, $size, $quality)
{
    // Выставляем заголовок
    //header("Content-Type: image/jpg");

    //added by me
    ini_set("gd.jpeg_ignore_warning", 1);

    // Получаем размеры оригинального изображения
    list($width, $height) = getimagesize($file);

    // Если уже ресайзнута - выход
    if ($width == 170 || $width == 400) { return false; }

    // Открываем оригинальное изображение
    $source = imagecreatefromjpeg($file);

    // Превью
    $thumbs = imagecreatetruecolor($size, $size) or die('Невозможно инициализировать GD поток');

    // Горизонтальное изображение
    if ($width > $height && $width > $size)
    {
        imagecopyresampled($thumbs, $source, 0, 0, (($width-$height)/2), 0, $size, $size, $height, $height);
    }
    // Вертикальное изображение
    elseif ($height > $width && $height > $size)
    {
        imagecopyresampled($thumbs, $source, 0, 0, 0, (($height-$width)/2), $size, $size, $width, $width);
    }
    // Если квадрат
    elseif ($height == $width && $height > $size)
    {
        imagecopyresampled($thumbs, $source, 0, 0, 0, 0, $size, $size, $width, $width);
    }
    // Изображение меньше размеров стороны
    else
    {
        $thumbs = $source;
    }

    // Выводим изображение
    return imagejpeg($thumbs, $file, $quality);//Сохраняет JPEG/PNG/GIF изображение

}



/**
 * img_resize - изменение размера изображения
 *
 * string $dir - директория, в которой выполнить тело функции
 *
 */

function img_resize($filename, $max_width, $max_height, $quality)
{
        list($orig_width, $orig_height,,,,,$mime) = getimagesize($filename);
        $wert = getimagesize($filename);

        if ($width == 600 || $width == 1024) { return false; }

            if ($orig_width < $orig_height)
            {
                $max_width = '600';
                $max_height = '800';
            }

        $width = $orig_width;
        $height = $orig_height;

        # taller
        if ($height > $max_height) {
            $width = ($max_height / $height) * $width;
            $height = $max_height;
        }

        # wider
        if ($width > $max_width) {
            $height = ($max_width / $width) * $height;
            $width = $max_width;
        }
        //создаем картинку под размеры
        $image_p = imagecreatetruecolor($width, $height);

        //В зависимости от расширения картинки вызываем соответствующую функцию
        if ($wert['mime'] == 'image/png') {
            $src = imagecreatefrompng($filename); //создаём новое изображение из файла
        } else if ($wert['mime'] == 'image/jpeg') {
            $src = imagecreatefromjpeg($filename);
        } else if ($wert['mime'] == 'image/gif') {
            $src = imagecreatefromgif($filename);
        } else {
            return false;
        }

        //сохраняем прозрачность
        imageAlphaBlending($image_p, false);
        imageSaveAlpha($image_p, true);
        imagecopyresampled($image_p, $src, 0, 0, 0, 0,
            $width, $height, $orig_width, $orig_height);


        //return $image_p;
        return imagejpeg($image_p, $filename, $quality);//Сохраняет JPEG/PNG/GIF изображение
}









/********************************************************/



function make_gallery($directory, $url)
{

    /*$directory = 'gallery';*/

    $allowed_types = array('jpg','jpeg','gif','png');
    $file_parts = array();
    $ext = '';
    $title = '';
    $i = 0;

    $dir_handle = @opendir($directory) or die("There is an error with your image directory!");

    while ($file = readdir($dir_handle))
    {

        //var_dump($file); exit;

        /* Rename files in folder like: 1.jpg, 2.jpg, 3.jpg etc */

        //$basepath = '/path/to/folder';


        /*
        $filelist = scandir($directory);

        $k = 1;

        foreach($filelist as $filename)
        {
            if( $filename !== '.' && $filename !== '..' && is_dir($filename) == false )
            {
                rename ($directory.'/'.$filename, $directory.'/'.$k.'.jpg');
                $k++;
            }
        }

        */


        /* */


        if ($file == '.' || $file == '..') continue;

        $file_parts = explode('.',$file);
        $ext = strtolower(array_pop($file_parts));

        $title = implode('.',$file_parts);
        $title = htmlspecialchars($title);

        $nomargin='';

        if(in_array($ext,$allowed_types))
        {
            if(($i+1)%4==0) $nomargin='nomargin';



            echo '
		<div class="pic '.$nomargin.'" style="background:url('.$url.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>';

            $i++;
        }
    }

    closedir($dir_handle);

}


