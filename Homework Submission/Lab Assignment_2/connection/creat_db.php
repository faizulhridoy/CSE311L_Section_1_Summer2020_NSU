<?php

$link =mysqli_connect('localhost','root','');

if($link == false)
{
    die("Error: could not connect" .mysql_connect_error());

}
$sql ="CREAT DATABASE vs_code_test";

if(mysqli_query(link,$sql)){
    echo "DB Created";
}
else {
    echo "Error: could not able to creat Db" mysqli_error($link);

}
mysqli_close($link)
?>
