<?php

    $link =mysqli_connect('localhost','root','','homework1');

    if($link==false)
    {
        die("Error DB Not Created" . mysqli_connect_error());
    }

     $sqli= "CREATE TABLE Locations(
         Location_id INT(4) NOT NULL PRIMARY KEY,
         Street_Adress 	VARCHAR(40),
        Postal_code 	VARCHAR(12),
        City 	VARCHAR(30) NOT NULL,
	    State_provience VARCHAR(25), 
        Country_id VARCHAR(2)
     )";

    if(mysqli_query($link,$sqli))
    {
        echo "Table Created";
    }
    else
    {
        echo "Table Not Created" . mysqli_error($link);
    }
     mysqli_close($link);
    

?>