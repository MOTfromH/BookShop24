<?php
$pfd = 'mysql:dbname=db_buchhandlung_verwaltung;host=localhost';
$user = 'root';
$pwd = '';

$conV = new PDO($pfd, $user, $pwd);

$con = new PDO ('mysql:dbname=db_buchhandlung;host=localhost', $user, $pwd);