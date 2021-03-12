<?php
    define("username","test1");
    define("pass","zsVrNnlNVE5HfpcM");
    define("host","localhost");
    define("db","test1");
    $mysql = new mysqli(host,username,pass,db);
    if ($mysql -> connect_errno) {
        echo "Failed to connect to Mysql: " . $mysql -> connect_errno;
        exit();
    }else{
        echo "DB connected";
    }
?>