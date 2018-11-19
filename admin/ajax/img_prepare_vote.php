<?php
header('Content-Type: text/html; charset=utf-8');

require_once __DIR__.'/../../config.php';
require_once SITEROOTDIR.'functions/image.php';
require_once SITEROOTDIR.'functions/file.php';
require_once SITEROOTDIR.'functions/text.php';
require_once SITEROOTDIR.'functions/sql.php';
require_once SITEROOTDIR.'models/vote.php';



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

                            $filename = iconv("cp1251", "UTF-8", $filename);

                            $works_arr = explode(".", $filename);

                            $works_arr_tmp = explode("/", $works_arr[1]);
                            $works_arr_count = count($works_arr_tmp);
                            $work_title =  $works_arr_tmp[$works_arr_count-1];
                            $work_ext =  $works_arr[2];

                            $work_url = str_replace('localhost/', '', $_POST['dir_url']);
                            $work_url = $work_url.'gallery/'.$work_title.'.'.$work_ext;


                            //connect to database
                            $mysqli = sql_Connect();


                            // Check connection
                            if ($mysqli->connect_error)
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            else
                            {
                                vote_Insert($mysqli, $work_title, $work_url);
                            }
                        }

                        else

                        {
                            echo "Ajax script can not receive directory name! (Картинки должны быть в gallery)"; exit;
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