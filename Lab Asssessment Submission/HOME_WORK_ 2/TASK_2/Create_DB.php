<?php
    $link = mysqli_connect('localhost','root','');

    if($link==false)
    {
        echo "Not connected" . mysqli_connect_error();
    }
    else 
    {
        echo "connected";
    }
    
    $sqli= "CREATE DATABASE Homework";

    if(mysqli_query($link,$sqli))
    {
        echo "DB created";
    }
    else 
    {
        echo "DB not Created" . mysqli_erro($link);
    }

?>