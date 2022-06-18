<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'OnLine');
$db=new mysqli(DB_SERVER,DB_USERNAME,PASSWORD,DB);
if(!$db){
    echo"Connection Failed";
}
