<?php

require_once __DIR__.'/../models/news.php';
require_once __DIR__.'/../functions/array.php';
require_once __DIR__.'/../functions/news.php';

news_Filter($_POST['year'], $_POST['month']);