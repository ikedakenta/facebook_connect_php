<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'パスワード');
define('DB_NAME', 'fb_connect_php');

define('APP_ID', 'FacebookアプリID');
define('APP_SECRET', 'Facebookアプリシークレット鍵');

define('SITE_URL', 'http://ホームページURLアドレス/fb_connect_php/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/fb_connect_php/');

