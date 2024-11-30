<?php
    $mysqli = new mysqli('localhost','root','','message');
    if ($mysqli->connect_errno) exit('Ошибки подключения');
    $mysqli->set_charset('utf8');
?>