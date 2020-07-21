<?php

$link = mysqli_connect('localhost','root','','Homework11');

if($link==false)
{
    die("Error: not connected" . mysqli_connect_error());
}

$sql="CREATE TABLE LOCATIONS(
    Location_id INT(5) PRIMARY KEY,
    Street_Adress VARCHAR(15),
    Postal_Code  VARCHAR(15),
    City	 VARCHAR(15),
    State_Province	 VARCHAR(15),
    Country_id  VARCHAR(2)


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