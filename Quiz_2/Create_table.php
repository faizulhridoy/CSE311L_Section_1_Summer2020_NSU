<?php
$link = mysqli_connect('localhost','root','','assignment');

if($link==false)
{
    echo "Not connected";
}
else
{
    echo "Connected";
}
 
$sql= "CREATE TABLE Department (
    Department_id INT(5) PRIMARY KEY,
    Department_name VARCHAR(15) NOT NULL,
    Manager_id INT(5),
    Location_id INT(5)
)";

if(mysqli_query($link,$sql))
{
    echo "Table Created";
}
else 
{
    echo "Table Not Created" . mysqli_error($link);
}
 mysqli_close($link);
?>