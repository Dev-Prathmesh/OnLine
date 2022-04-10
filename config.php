<?php
define('DB_SERVER', 'localhost');define('DB_USERNAME', 'root');define('PASSWORD', '');define('DB', 'OnLine');$con=new mysqli(DB_SERVER,DB_USERNAME,PASSWORD,DB);
    function LoginUser(){
        if(isset($_POST['username'])){
             if(isset($_POST['password'])){
                $user=$_POST['username'];
                $pwd=$_POST['password'];
                session_start();
            }
        }
    }