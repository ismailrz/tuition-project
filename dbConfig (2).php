<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'tuitiono_Admin';
$dbPassword = 'Tuition@Offer1234';
$dbName = 'tuitiono_MainDatabase';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>