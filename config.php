<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'survey');
define('DB_PASSWORD', 'coffee');
define('DB_NAME', 'survey');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>