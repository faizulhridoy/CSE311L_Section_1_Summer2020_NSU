<?php

$link = mysqli_connect('localhost','root','');

if($link==false)
{
    die ("Error:Not connected" . mysqli_connect_error());
}

$sql= "CREATE DATABASE Homework11";

if(mysqli_query($link,$sql))
{
    echo "DB CREATED";
}
else
{
    echo "DB not Created" . mysqli_error($link);
}
mysqli_close($link);

?>