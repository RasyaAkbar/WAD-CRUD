<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '127.0.0.1:3308';
$databaseName = 'wad_handson';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>