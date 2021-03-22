<?php

define('DBLOCATION', 'localhost');
define('DBNAME', 'german');
define('DBUSER', 'root');
define('DBPASS', '');

$db = mysqli_connect(DBLOCATION, DBUSER, DBPASS);

if(!$db){
    die('Ошибка подключения MySQL');
}

if(!mysqli_set_charset($db, 'utf8')){
    die('Ошибка установки кодировки');
}

if(!mysqli_select_db($db, DBNAME)){
    die('Ошибка подключения к БД');
}