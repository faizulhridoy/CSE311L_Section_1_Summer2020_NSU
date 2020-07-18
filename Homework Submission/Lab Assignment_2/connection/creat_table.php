<?php

4link =mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link==false)
{
    die("Error: Could not Connect" .mysqil_connect_error());

}

$sql ="CREAT TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(225) NOT NULL,
    created_at DATABASE DEFAULT CURRENT_TIMESTAMP


)";

if(mysqil_query($link,$sql)){
    echo "Table Created";
}
else{
    echo "Error : could not able to creat table" .mysqli_error($link);

}
mysqil_close($link)

?>