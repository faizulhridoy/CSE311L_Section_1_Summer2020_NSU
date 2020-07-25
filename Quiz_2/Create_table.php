<?php
$link = mysqli_connect('localhost','root','','Quiz');

if($link==false)
{
    echo "Not connected";
}
else
{
    echo "Connected";
}
 
$sql= "CREATE TABLE jobs (
    job_id VARCHAR(10) PRIMARY KEY,
    Department_name VARCHAR(35) NOT NULL,
    Manager_id INT(6),
    Location_id INT(6)
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