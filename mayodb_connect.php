<?php
//connect to mysql database

    $host = "127.0.0.1";
    $user = "root";   //phpadmin default name
    $pass = "";       //Remember, there is NO password by default!
    $db = "mayoyoga";  //Your database name you want to connect to
    $port = 3306;     //The port #. It is always 3306

    $con= mysqli_connect($host, $user, $pass, $db, $port)or die("Error " . mysqli_error($con));
    // $mysqli
?>
