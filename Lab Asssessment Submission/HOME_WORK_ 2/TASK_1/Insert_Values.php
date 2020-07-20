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
 
$sql= "INSERT INTO  Department (Department_id,Department_name,Manager_id,Location_id) Values 
(10,'Administration',200,1700),
(20,'Marketing',201,1800),
(50,'Shipping',124,1500),
(60,'IT',103,1400),
(80,'Sales',149,2500),
(110,'Accounting',205,1700),
(190,'Contracting',NULL,1700)";

if(mysqli_query($link,$sql))
{
    echo "Inserted";
}
else 
{
    echo "Not Inserted" . mysqli_error($link);
}
 mysqli_close($link);
?>