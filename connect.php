<?php
$connect = new mysqli("localhost", "root", "", "regbd");
if(!$connect)
{echo 'нет соединения с базой данных';}
?>