<?php

$link= mysqli_connect('localhost','root','','Homework11');

if($link==false)
{
    echo "Error: Not connected" . mysqli_connect_error();
}

$slq= "INSERT INTO LOCATIONS(Location_id,Street_Adress,Postal_Code,City,State_Province,Country_id ) VALUES
    (1400,'2014 jabbewocky RD','26192 ','Southlake ','Texas ','US'),
    (1500 ,'2011 inrior Bivd','99236  ','South San Francisco ','California  ','US'),
    (1700  ,'2004 Charade Rd','98199   ','Seattle ','Washinton   ','US'),
    (1800   ,'460 Bloor St.W','ON M5S 1X8   ','Toronto  ','Ontario    ','CA'),
    (2500 ,'Magdalen center-The oxford Sc.Park','OX9 9ZB ','OXford','OXford','UK')";

if(mysqli_query($link,$slq))
{
    echo "Values Inserted";
}

else
{
    echo "Values Not Inserted" . mysqli_error($link);
}
mysqli_close($link);
?>