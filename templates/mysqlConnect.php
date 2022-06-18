<?php
$servername = "81.90.180.151";
$username = "diplom";
$password = "l2G3HLPbTxeSz0DJ";
$BDname = "bd_blog";

$mysqli = new mysqli($servername, $username, $password, $BDname);

if ($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
};