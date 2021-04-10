<?php

$con=new mysqli("localhost","root","","projet");
    

/*    $connect=@mysql_connect("localhost","root","");
$db_name="orientation des etudiants";
if($connect) {$db= mysql_select_db($db_name);}
else {include 'error2.php';}   */
if(mysqli_connect_error())
    { include 'error2.php'; }  
 else {
	 $b=true;
  
}





?>