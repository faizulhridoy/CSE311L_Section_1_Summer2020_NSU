<?php

$link = mysqli_connect('localhost','root','','mid_trem_su');

if($link==false)
{
    die("Error: not connected" . mysqli_connect_error());
}

$sql="CREATE TABLE Department(
    fid decimal(9,0) PRIMARY KEY,
    fname VARCHAR(30),

    deptid decimal(3,0)


)";

if(mysqli_query($link,$sql))
{
    echo "Table Craeted";
}

else
{
    echo "Table Not Crreated" . mysqli_error($link);
}
mysqli_close($link);
?>