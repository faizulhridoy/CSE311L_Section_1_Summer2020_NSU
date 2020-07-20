<?php
$link =mysqli_connect('localhost','root','');
if($link==false)
{
    die("Error:could not connect" . mysqli_connect_error());
}

$sqli="CREATE DATABASE Assignment_2_T1";

if(mysqli_query($link,$sqli))
{
    echo "DB Created";
}
else
{
    echo "DB Not Created" .mysqli_error($link);
}

mysqli_close($link);

?>