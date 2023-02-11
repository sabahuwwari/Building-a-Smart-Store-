<?php

$session_start();
global $db;
$GLOBALS['db'] = mysqli_connect('localhost','root', 'Your_Password' ,'Your_Database');

?>