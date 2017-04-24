<?php
/* Database connection settings */
$host ='localhost';
$user ='root';
$password ='root';
$db='login_system';
$mysqli= new mysqli($host,$user,$password,$db) or die($mysqli->error);