<?php

define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASS' ,'$3v3nF0ld123');
define('DB_NAME', 'e-container');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>