<?php

require_once __DIR__.'/../../config.php';
require_once __DIR__.'/../../functions/file.php';


    if (isset($_POST['dir_name']))

    {

        //make path to the folder

        $base = SITEROOTDIR."media/news/";
        $base_url = SITEURL."media/news/";

        //check that folder not exist

        if (!is_dir($base.$_POST['dir_name']))
        {

            //create folders for news

            $dir = dir_make($base, $_POST['dir_name']);
            $url = $base_url.$_POST['dir_name'];

                //message and [$path] returned by ajax

                if ($dir !== false )
                {

                    //save in session name of directory
                    session_start();

                    $_SESSION['dir_name_ru'] = $_POST['dir_name_ru'];
                    $_SESSION['dir_path'] = $dir;
                    $_SESSION['dir_url'] = $url;

                    //return path and url
                    echo "Folder created::".$dir."::".$url;

                }

                 else { echo "Folder not created"; }

            //change base

            $base = $dir;

            //make subfolders

            $dir = dir_make($base, 'prev-small');
            $dir = dir_make($base, 'prev-medium');
            $dir = dir_make($base, 'main');
            $dir = dir_make($base, 'gallery');
            $dir = dir_make($base, 'thumb');

        }

        else {

                $dir =  $base.$_POST['dir_name'];
                $url =  $base_url.$_POST['dir_name'];

                session_start();

                $_SESSION['dir_name_ru'] = $_POST['dir_name_ru'];
                $_SESSION['dir_path'] = $dir;
                $_SESSION['dir_url'] = $url;

                echo "Directory already exist::".$dir."::".$url;

             }
    }

    else //POST is empty

        {
            echo "Ajax script can not receive directory name!";
        }