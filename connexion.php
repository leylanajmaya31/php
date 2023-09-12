<?php
$db = new PDO('mysql:host=docker-lamp-mysql;dbname=test','root', 'p@ssw0rd',
array(PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION));
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

var_dump($db);
?>