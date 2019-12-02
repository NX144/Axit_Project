<?php
define('DB', [
    'DBHOST' => 'localhost',
    'DBUSER' => 'root',
    'DBPASS' => '1405',
    'DBBASE' => 'axitbook'
]);
$connection = mysqli_connect( DB['DBHOST'], DB['DBUSER'], DB['DBPASS'], DB['DBBASE']) or die('Ошибка подключения БД!');
mysqli_set_charset($connection, "utf8");