<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'fdb27.runhosting.com');
define('DB_USERNAME', '3557575_hbou');
define('DB_PASSWORD', 'allah@1#');
define('DB_NAME', '3557575_hbou');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>