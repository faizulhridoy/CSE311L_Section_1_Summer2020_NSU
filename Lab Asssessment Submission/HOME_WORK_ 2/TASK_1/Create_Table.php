<?php
$link = mysqli_connect('localhost','root','','assignment_2_t1');

if($link==false)
{
    echo "Not connected";
}
else
{
    echo "Connected";
}
 
$sql= "CREATE TABLE Department (
    Department_id INT PRIMARY KEY,
    Department_name VARCHAR(15) NOT NULL,
    Manager_id INT,
    Location_id INT
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