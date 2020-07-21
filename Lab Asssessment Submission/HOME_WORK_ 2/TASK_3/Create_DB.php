<?php
    $link =mysqli_connect('localhost','root','');

    if($link==false)
    {
        echo "Error:Could not connect" . mysqli_connect_error();
    }
     $sqli= "CREATE DATABASE homework1";
    
     if(mysqli_query($link,$sqli))
     {
         echo "DB CREATED";
     }
     else
     {
        echo "DB Not CREATED " . mysqli_error($link);
     }


?>