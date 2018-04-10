<?php
header('Content-Type: text/html; charset=utf-8');

require_once __DIR__.'/../../config.php';
require_once __DIR__.'/../../functions/image.php';
require_once __DIR__.'/../../functions/file.php';
require_once __DIR__.'/../../functions/text.php';

/*

$_POST['dir_path']
$_POST['dir_url']

*/

    if (isset($_POST['dir_path']))

        {
            // resize
            $path = str_replace(' ','',$_POST['dir_path']);

            $max_width = '1024';
            $max_height = '768';
            $quality = 90;
            $size_small = 170; //for square preview
            $size_medium = 400; //for square preview
            $devider = '::';

            $j = 0;
            $ret = array();



            //resize subfolders

            $folders = dir_get_folders($path);
            $folders_arr = explode(";", $folders);


                for ($i = 0; $i < count($folders_arr); $i++)
                {
                    foreach (glob($path. $folders_arr[$i]."/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE) as $filename)
                    {

                        //prepare gallery

                        if ( is_substr_in_str($folders_arr[$i], 'gallery') )
                        {
                            img_resize($filename, $max_width, $max_height, $quality);
                        }


                        elseif ( is_substr_in_str($folders_arr[$i], 'prev-small') )
                            //if folder is [prev] make square preview

                            {
                                img_preview_square($filename, $size_small, $quality);
                            }

                        elseif ( is_substr_in_str($folders_arr[$i], 'prev-medium') )
                            //if folder is [prev] make square preview

                        {
                            img_preview_square($filename, $size_medium, $quality);
                        }

                        elseif ( is_substr_in_str($folders_arr[$i], 'main') )
                            //if folder is [prev] make square preview

                            {
                                img_resize($filename, $max_width, $max_height, $quality);
                            }

                        elseif ( is_substr_in_str($folders_arr[$i], 'thumb') )

                            {
                                img_preview_square($filename, 200, $quality);
                            }

                        //making list of all files in news-folder
                        $converted_base = iconv("cp1251", "UTF-8", basename($filename));
                        $ret[$j] = $_POST['dir_url'].$folders_arr[$i]."/".$converted_base;
                        $j++;

                    }
                }

                $message = "All images resized!";

                $image_Count = count($ret);

                $ret[$image_Count+1] = $image_Count;

            $ret_str = implode("::", $ret);

            echo $ret_str;
        }

        else //POST is empty

        {
            echo "Ajax script can not receive directory name!";
        }