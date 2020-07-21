<?php

$link= mysqli_connect('localhost','root','','Homework22');

if($link==false)
{
    echo "Error: Not connected" . mysqli_connect_error();
}

$slq= "INSERT INTO employees(EMPLOYEE_ID,FIRST_NAME,LAST_NAME,EMAIL,PHONE_NUMBER,HIRE_DATE,JOB_ID,SALARY,COMMISION_PCT,MANAGER_ID,DEPEARTMENT_ID) VALUES
   (100,'Steven','King ','SKING ','515.123.4567 ','17-JUN-87 ','AD PRES ',24000,NULL,NULL,90),
   (101,'Neena','NKOCHHAR ','SKING ','515.123.4568 ','21-SEP-89 ','AD VP',17000,NULL,100,90),
   (102,'Lex','IDe Haan ','LDEHAAN ','515.123.4569 ','13-JAN-93','AD VP',17000,NULL,100,90),
   (103,'Alexander','Hunold','AHUNOLD ','590.423.4567 ','03-JAN-90','IT PROG',9000,NULL,102,60),
   (104,'Bruce','Ernst','IBERNST ','590.423.4568','21-MAY-91','IT PROG',6000,NULL,103,60),
   (107,'Diana','Lorentz','DLORENTZ ','590.423.5567','07-FEB-99','IT PROG',4200,NULL,103,60),
   (124,'Kevin','Mourgos ','KMOURGOS  ','650.123.5234 ','16-NOV-99 ','ST MAN ',5800 ,NULL,100 ,50 ),
   (141,'Trenna','1Rajs ','TRAJS  ','650.121.8009 ','17-OCT-95','ST CLERK ',3500 ,NULL,124 ,50 ),
   (142,'Curtis','Davies ','CDAVIES  ','650.121.2994 ','29-JAN-97','ST CLERK ',3100 ,NULL,124 ,50 ),
   (143,'Randall','Maths ','IRMATOS  ','650.121.2874','15-MAR-98','ST CLERK ',2600 ,NULL,124 ,50 ),
   (144,'Peter','Vargas','IPVARGAS','650.121.2004','09-JUL-98','ST CLERK',2500,NULL,124,50),
   (149,'Eleni','Zlotkey','1ELLOTKEY','011.44.1344.429018','29-JAN-00','ISA MAN',10500,2,100,80),
   (174,'Ellen','Abel','EABEL','011.44.1644.429267','11-MAY-96','SA REP ',11000 ,NULL,149,80),
   (176,'Jonathon','Taylor ','JTAYLOR ','011.44.1644.429265','24-MAR-98 ','ISA REP  ',8600  ,2,149,80),
   (178,'Kimberely','Grant ','KGRANT ','011.44.1644.429263','24-MAY-99 ','SA REP ',7000  ,15,149,NULL),
   (200,'Jennifer','Whalen ','JWHALEN  ','1515.123.4444','17-SEP-87  ','AD ASST  ',4400  ,NULL,101,10),
   (201,'Michael','1Hartstein ','IMHARTSTE   ','1515.123.5555','17-FEB-96   ','MK_MAN ',1300  ,NULL,101,20),
   (202,'Pat','Fay ','IPFAY   ','1603.123.6666','17-AUG-97  ','MK REP ',8000  ,NULL,201,20),
   (205,'Shelley','Higgins ','SHIGGINS   ','515.123.8080','07-JUN-94  ','AC MGR ',12000  ,NULL,101,110),
   (206,'William','IGietz ','1WGIETZ   ','1515.123.8181','07-JUN-94 ','AC ACCOUNT',8300  ,NULL,205,110)";



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