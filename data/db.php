<?php
if($_SERVER['HTTP_HOST'] == 'localhost') {
    $db_server = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'deltacampus';
}
else {
    $db_server = 'xxxxxxx.mysql.db';
    $db_user = 'xxxxxxx';
    $db_password = 'xxxxxxx';
    $db_name = 'xxxxxxx';
}

$db_connect = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (!$db_connect) {
    die('Connection failed: '.mysqli_connect_error());
}