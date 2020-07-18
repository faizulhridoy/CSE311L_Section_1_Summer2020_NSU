<?php

4link =mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link==false)
{
    die("Error: Could not Connect" .mysqil_connect_error());

}

$sql ="INSERT INTO test_table(id,username,password)VALUES
('1','DEMO','DEMO')";

if(mysqil_query($link,$sql)){
    echo "Table Created";
}
else{
    echo "Error : could not able to creat table" .mysqli_error($link);

}
mysqil_close($link)

?>