<?php


$con=mysql_connect('127.0.0.1', 'zackrauen', 'knux777', 'zackrauen');

if (!$con) {
    die('Connect Error (' . mysql_connect_errno() . ') '
            . mysql_connect_error());
}

session_start();

?>