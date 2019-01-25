<?php

/*Get request's controller*/
/**********************************************************************************************************************/

//if exist GET-request from news_add.php page

if (isset($_GET['route']))
    {
        switch ($_GET['route'])

        {
            /* Route = 'News' */
            /**********************************************************************************************************/
            case 'news':

            {
                if (isset($_GET['item']))
                {
                    if ($_GET['item'] == 'all')
                    {
                        //Get all news for main page

                        require_once SITEROOTDIR.'models/news.php';
                        require_once SITEROOTDIR.'functions/array.php';
                        require_once SITEROOTDIR.'functions/sql.php';


                        //connect to database
                        $mysqli = sql_Connect();

                        //vars
                        //*********************************************************************************************/

                        //$page = 1;


                        //*********************************************************************************************/

                        //get data from database by last month

                        $news = news_Get_ByDate_vsImg($mysqli, NEWS_LIMIT_ALL, date('Y'), date('m'));

                        //makeing array  - save data in array

                        $news_Count = count($news);
                        $news_Array = object_GetArray ($news, $news_Count, NEWS_ONPAGE);


                        //*********************************************************************************************/


                        //save vars in session

                        session_start();

                        $_SESSION['page'] = 1;
                        $_SESSION['news_Count'] = $news_Count;
                        $_SESSION['news_Array'] = $news_Array;



                        //views
                        //*********************************************************************************************/

                        include_once SITEROOTDIR.'views/news_all.php';


                    }

                    else
                        {
                            //Get single news data <- by click on main page

                            //checking URL, if not valid - redirect to main page
                            if (!preg_match("/^[-a-z0-9]+\.html$/", $_GET['item']))

                            {
                                header('location: /');
                                exit;

                            }


                            //else get single news data

                            require_once SITEROOTDIR.'models/news.php';
                            require_once SITEROOTDIR.'functions/sql.php';

                            //connect to database
                            $mysqli = sql_Connect();

                            //delete from link '.html'
                            $news_link_str = substr($_GET['item'],0,-5);

                            //model - get data for single news
                            $news_current = news_Get_SingleByName($mysqli, $news_link_str);

                            //if received single news data - include view of single news

                            if (!empty($news_current))
                            {
                                include_once __DIR__.'/../views/news_single.php';
                            }
                        }
                }

                break;

            } // case 'news'


            /* Route = 'Articles' */
            /**********************************************************************************************************/
            case 'article':

            {
                if (isset($_GET['item']))
                {
                    if ($_GET['item'] == 'all')
                    {
                        //Get all news for main page

                        require_once SITEROOTDIR.'models/news.php';
                        require_once SITEROOTDIR.'functions/array.php';
                        require_once SITEROOTDIR.'functions/sql.php';


                        //connect to database
                        $mysqli = sql_Connect();

                        //vars
                        //*********************************************************************************************/

                        //$page = 1;


                        //*********************************************************************************************/

                        //get data from database by last month

                        $news = news_Get_ByDate_vsImg($mysqli, NEWS_LIMIT_ALL, date('Y'), date('m'));

                        //makeing array  - save data in array

                        $news_Count = count($news);
                        $news_Array = object_GetArray ($news, $news_Count, NEWS_ONPAGE);


                        //*********************************************************************************************/


                        //save vars in session

                        session_start();

                        $_SESSION['page'] = 1;
                        $_SESSION['news_Count'] = $news_Count;
                        $_SESSION['news_Array'] = $news_Array;



                        //views
                        //*********************************************************************************************/

                        include_once SITEROOTDIR.'views/news_all.php';


                    }

                    else
                    {
                        //Get single news data <- by click on main page

                        //checking URL, if not valid - redirect to main page
                        if (!preg_match("/^[-a-z0-9]+\.html$/", $_GET['item']))

                        {
                            header('location: /');
                            exit;

                        }


                        //else get single news data

                        require_once SITEROOTDIR.'models/news.php';
                        require_once SITEROOTDIR.'functions/sql.php';

                        //connect to database
                        $mysqli = sql_Connect();

                        //delete from link '.html'
                        $news_link_str = substr($_GET['item'],0,-5);

                        //model - get data for single news
                        $news_current = news_Get_SingleByName($mysqli, $news_link_str);

                        //if received single news data - include view of single news

                        if (!empty($news_current))
                        {
                            include_once __DIR__.'/../views/news_single.php';
                        }
                    }
                }

                break;

            } // case 'article'


            /* Route = 'Concurs' */
            /**********************************************************************************************************/
            case 'concurs':

            {
                if (isset($_GET['item']))
                {
                    if ($_GET['item'] == 'all')
                    {
                        //Get all news for main page

                        require_once SITEROOTDIR.'models/concurs.php';
                        require_once SITEROOTDIR.'functions/array.php';
                        require_once SITEROOTDIR.'functions/sql.php';


                        //connect to database
                        $mysqli = sql_Connect();

                        //vars
                        //*********************************************************************************************/

                        //$page = 1;


                        //*********************************************************************************************/

                        //get data from database

                        $concurs = concurs_Get_all_ex_archive($mysqli, NEWS_LIMIT_ALL);


                        //makeing array  - save data in array

                        $concurs_Count = count($concurs);
                        $concurs_Array = object_GetArray ($concurs, $concurs_Count, CONCURS_ONPAGE);

                        //*********************************************************************************************/


                        //save vars in session

                        //session_start();

                        $_SESSION['concurs_Page'] = 1;
                        $_SESSION['concurs_Count'] = $concurs_Count;
                        $_SESSION['concurs_Array'] = $concurs_Array;


                        //views
                        //*********************************************************************************************/

                        include_once SITEROOTDIR.'views/concurs_all.php';


                    }

                    elseif ($_GET['item'] == '2018-nnm')

                    {
                        include_once SITEROOTDIR.'views/concurs/2018-nnm/vote.php';
                        break;
                    }

                    else
                    {
                        //Get single concurs data

                        //checking URL, if not valid - redirect to main page
                        if (!preg_match("/^[-a-z0-9]+\.html$/", $_GET['item']))

                        {
                            header('location: /');
                            exit;

                        }


                        //else get single concurs data

                        require_once SITEROOTDIR.'models/concurs.php';
                        require_once SITEROOTDIR.'functions/sql.php';

                        //connect to database
                        $mysqli = sql_Connect();

                        //delete from link '.html'
                        $concurs_link_str = substr($_GET['item'],0,-5);

                        //model - get data for single news
                        $concurs_current = concurs_Get_SingleByName($mysqli, $concurs_link_str);

                        //if received single news data - include view of single news

                        if (!empty($concurs_current))
                        {
                            include_once __DIR__.'/../views/concurs_single.php';
                        }
                    }
                }

                break;

            } // case 'article'


            /* Route = 'Filials' */
            /**********************************************************************************************************/

            case 'filials':
            {

                //choose filial

                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {

                        case 'filial-gorod.html':
                            {
                                include_once SITEROOTDIR.'views/filials/filial-gorod.php';
                                break;
                            }

                        case 'filial-bogorodskoe.html':
                            {
                                include_once SITEROOTDIR.'views/filials/filial-bogorodskoe.php';
                                break;
                            }

                        case 'filial-bidanovo.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-bidanovo.php';
                            break;
                        }

                        case 'filial-vsehsvyatskoe.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-vsehsvyatskoe.php';
                            break;
                        }

                        case 'filial-gurenki.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-gurenki.php';
                            break;
                        }

                        case 'filial-detskaya.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-detskaya.php';
                            break;
                        }

                        case 'filial-dubrovka.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-dubrovka.php';
                            break;
                        }

                        case 'filial-ivancevo.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-ivancevo.php';
                            break;
                        }

                        case 'filial-kamenskoe.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-kamenskoe.php';
                            break;
                        }

                        case 'filial-klimkovka.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-klimkovka.php';
                            break;
                        }

                        case 'filial-podrezchiha.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-podrezchiha.php';
                            break;
                        }

                        case 'filial-polom.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-polom.php';
                            break;
                        }

                        case 'filial-prokopie.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-prokopie.php';
                            break;
                        }

                        case 'filial-rakalovo.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-rakalovo.php';
                            break;
                        }

                        case 'filial-sosnovka.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-sosnovka.php';
                            break;
                        }

                        case 'filial-siryani.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-siryani.php';
                            break;
                        }

                        case 'filial-troica.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-troica.php';
                            break;
                        }

                        case 'filial-fedosyata.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-fedosyata.php';
                            break;
                        }

                        case 'filial-udino.html':
                        {
                            include_once SITEROOTDIR.'views/filials/filial-udino.php';
                            break;
                        }

                    }
                }

                else
                    {
                        include_once SITEROOTDIR.'views/filials.php';
                        break;
                    }

                break;
            }

            /* Route = 'readers' */
            /**********************************************************************************************************/

            case 'readers':
                {
                    if (isset($_GET['item']))
                    {
                        switch ($_GET['item'])
                        {

                            case 'services.html': {
                                include_once SITEROOTDIR.'views/readers/services.php';
                                break;
                            }
                            case 'clubs.html': {
                                include_once SITEROOTDIR.'views/readers/clubs.php';
                                break;
                            }
                            case 'rules.html': {
                                include_once SITEROOTDIR.'views/readers/rules.php';
                                break;
                            }
                        }

                    }
                        else
                        {
                            header('location: /');
                            exit;

                        }

                    break;
                }



            /* Route = 'work' */
            /**********************************************************************************************************/

            case 'work':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {
                        case 'competitions.html': {
                            include_once SITEROOTDIR.'views/work/competitions.php';
                            break;
                        }
                        case 'programs.html': {
                            include_once SITEROOTDIR.'views/work/programs.php';
                            break;
                        }
                        case 'work-table.html': {
                            include_once SITEROOTDIR.'views/work/work-table.php';
                            break;
                        }
                        case 'research.html': {
                            include_once SITEROOTDIR.'views/work/research.php';
                            break;
                        }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }



            /* Route = 'about' */
            /**********************************************************************************************************/

            case 'about':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {
                        case 'history.html': {
                            include_once SITEROOTDIR.'views/about/history.php';
                            break;
                        }
                        case 'structure.html': {
                            include_once SITEROOTDIR.'views/about/structure.php';
                            break;
                        }
                        case 'success.html': {
                            include_once SITEROOTDIR.'views/about/success.php';
                            break;
                        }
                        case 'partners.html': {
                            include_once SITEROOTDIR.'views/about/partners.php';
                            break;
                        }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }

            /* Route = 'structure' */
            /**********************************************************************************************************/

            case 'structure':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {

                        case 'administration.html': {
                            include_once SITEROOTDIR.'views/structure/administration.php';
                            break;
                        }

                        case 'sector_dosug.html': {
                            include_once SITEROOTDIR.'views/structure/sector_dosug.php';
                            break;
                        }

                        case 'metodist.html': {
                            include_once SITEROOTDIR.'views/structure/metodist.php';
                            break;
                        }

                        case 'ci.html': {
                            include_once SITEROOTDIR.'views/structure/ci.php';
                            break;
                        }

                        case 'otdel_obslug.html': {
                            include_once SITEROOTDIR.'views/structure/otdel_obslug.php';
                            break;
                        }

                        case 'otdel_complect.html': {
                            include_once SITEROOTDIR.'views/structure/otdel_complect.php';
                            break;
                        }

                        case 'sector_kraeved.html': {
                            include_once SITEROOTDIR.'views/structure/sector_kraeved.php';
                            break;
                        }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }

            /* Route = 'about' */
            /**********************************************************************************************************/

            case 'afisha':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {
                        case 'need-help.html': {
                            include_once SITEROOTDIR.'views/afisha/nuzhna-vasha-pomosch.php';
                            break;
                        }

                        case 'recommendations-for-children.html': {
                            include_once SITEROOTDIR.'views/afisha/recommendations-for-children.php';
                            break;
                        }

                        case 'rezhim-raboty-v-prazdniki.html': {
                            include_once SITEROOTDIR.'views/afisha/rezhim-raboty-v-prazdniki.php';
                            break;
                        }

                        case '12-june.html': {
                            include_once SITEROOTDIR.'views/afisha/12-june.php';
                            break;
                        }

                        case 'remont-2018.html': {
                            include_once SITEROOTDIR.'views/afisha/remont-2018.php';
                            break;
                        }

                        case 'marihin-reading-3.html': {
                            include_once SITEROOTDIR.'views/afisha/marihin-reading-3.php';
                            break;
                        }

                        case 'ya-volonter.html': {
                            include_once SITEROOTDIR.'views/afisha/ya-volonter.php';
                            break;
                        }

                        case 'new-year-2019.html': {
                        include_once SITEROOTDIR.'views/afisha/new-year-2019.php';
                        break;
                        }

                        case 'new-year-2019-time.html': {
                            include_once SITEROOTDIR.'views/afisha/new-year-2019-time.php';
                            break;
                        }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }



            /* Route = 'about' */
            /**********************************************************************************************************/

            case 'reading':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {
                        case 'for-childrens.html': {
                            include_once SITEROOTDIR.'views/reading/for-childrens.php';
                            break;
                        }

                        case 'cats.html': {
                            include_once SITEROOTDIR.'views/reading/cats.php';
                            break;
                        }

                        case 'fantasy.html': {
                            include_once SITEROOTDIR.'views/reading/fantasy.php';
                            break;
                        }

                        case 'christmas-story-2019.html': {
                            include_once SITEROOTDIR.'views/reading/christmas-story-2019.php';
                            break;
                        }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }


            /* Route = 'Projects' */
            /**********************************************************************************************************/

            case 'projects':

            {
                //choose project

                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {

                        case 'virtual-tour.html':
                        {
                            include_once SITEROOTDIR.'views/projects/virtual-tour/virtual-tour.php';
                            break;
                        }

                        case '100great.html':
                        {
                            include_once SITEROOTDIR.'views/projects/virtual-tour/100great.php';
                            break;
                        }

                    }
                }

                else
                {
                    include_once SITEROOTDIR.'views/projects.php';
                    break;
                }

                break;
            }


            /* Route = 'Print' */
            /**********************************************************************************************************/

            case 'print':
            {
                include_once __DIR__ . '/../views/print.php';
                break;
            }

            /* Route = 'Print' */
            /**********************************************************************************************************/

            case 'publish':
            {
                include_once __DIR__ . '/../views/publish.php';
                break;
            }

            /* Route = 'Books of month' */
            /**********************************************************************************************************/

            case 'books-of-month':
            {
                include_once __DIR__ . '/../views/books_of_month.php';
                break;
            }


            /* Route = 'person' */
            /**********************************************************************************************************/

            case 'person':
            {
                if (isset($_GET['item']))
                {
                    switch ($_GET['item'])
                    {

                        case 'all': {
                            //include_once SITEROOTDIR.'views/person/person_single.php';
                            break;
                        }

                        default:
                            {

                                //Get single person data <- by click on main page

                                //checking URL, if not valid - redirect to main page
                                if (!preg_match("/^[-a-z0-9]+\.html$/", $_GET['item']))

                                {
                                    header('location: /');
                                    exit;

                                }


                                //else get single person data

                                require_once SITEROOTDIR.'models/person.php';
                                require_once SITEROOTDIR.'functions/sql.php';

                                //connect to database
                                $mysqli = sql_Connect();

                                //delete from link '.html'
                                $person_link_str = substr($_GET['item'],0,-5);

                                //model - get data for single news
                                $person_current = person_Get_SingleByName($mysqli, $person_link_str);

                                //if received single news data - include view of single news

                                if (!empty($person_current))
                                {
                                    include_once SITEROOTDIR.'views/person/person_single.php';
                                }

                                exit;
                            }
                    }

                }
                else
                {
                    header('location: /');
                    exit;

                }

                break;
            }


            default: { header('location: /'); exit; }

        } //switch ($_GET['route'])
    } //if (isset($_GET['route']))

    else

    {
        header('location: /');
        exit;

    }

?>