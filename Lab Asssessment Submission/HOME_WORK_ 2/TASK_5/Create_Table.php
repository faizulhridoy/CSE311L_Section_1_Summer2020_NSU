<?php

$link = mysqli_connect('localhost','root','','Homework22');

if($link==false)
{
    die("Error: not connected" . mysqli_connect_error());
}

$sql="CREATE TABLE employees(
   EMPLOYEE_ID int(5) NOT NULL PRIMARY KEY,
    FIRST_NAME VARCHAR(10) NOT NULL,
    LAST_NAME VARCHAR(10)NOT NULL,
    EMAIL VARCHAR(10)NOT NULL,
    PHONE_NUMBER VARCHAR (20) NOT NULL,
    HIRE_DATE VARCHAR(20),
    JOB_ID  VARCHAR(10)NOT NULL,
    SALARY INT(8),
    COMMISION_PCT  INT(3),
    MANAGER_ID INT(5),
    DEPEARTMENT_ID INT(3)


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