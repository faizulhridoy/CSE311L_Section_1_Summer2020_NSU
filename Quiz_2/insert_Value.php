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
 
$sql= "INSERT INTO  jobs (job_id,job_title,Min_Salary,Max_salary) Values 
('AD_pres','president',2000,4000),
('AD_Vp','Administrattion vice president',15000,30000),
('AD_Asst','Administrattion Assistant',3000,6000),
('AC_MGR','Accounting Manager',8200,16000),
('Ac_Account','public Accountant Assistant',4200,9000),
('SA_Man','Sales  Manager',10000,20000),
('SA_Rep','Seles Representitive',2000,4000)
('ST_Man','Sales Manager',2000,4000),
('SA_rep','Sales Representitive',6000,12000),
('ST_Man','Stock Manager ',5500,8500),
('ST_Clerk','Stock Clerk ',2000,5000),
('It_prog','progtammer  ',4000,10000),
('Mk_man','Marketing Manager ',9000,150000),
('Mk_Rep','Stock Marketing Representatative ',4000,9000)

";

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