<?php

$link =mysqli_connect('localhost','root','','Homework');

if($link==false)
{
    die("localhost Not connected" . mysqli_connect_error($link));
}

else
{
    echo "Localhost connected";
}

$mysqli= "CREATE TABLE Employees(

Employee_id INT(6) PRIMARY KEY NOT NULL,
Last_name 	VARCHAR(25) NOT NULL,
Email 	VARCHAR(25) NOT NULL,
Phone_number 	VARCHAR(15),
Hire_Date 	DATE NOT NULL,
Job_id 	VARCHAR(10) NOT NULL,
Salary 	INT(8), 	
Commision_Pct 	INT(2),
Manager_id 	INT(6),
Department_id INT(4)

)";

if(mysqli_query($link,$mysqli))
{
    echo "Table created";
}

else
{
    echo "Table not Created" .mysqli_error($link);
}
mysqli_close($link);

?>