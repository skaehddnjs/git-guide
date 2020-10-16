<?php

  /*** info.php ***/

  $n = $_GET['num'];
  if(empty($n)){
    $n = 1;
  }
 $host='localhost';
$user='root';
$pw='';
$dbname='blind_db';

$dbConnect = new mysqli($host,$user,$pw,$dbname);
$dbConnect->set_charset("utf-8");
  $sql =  "SELECT * FROM `sql_injection` where myMemberID=".$n ; 
  $result = $dbConnect->query($sql) or die("mysql_error()");
  echo "<body bgcolor=#000000>";  
  echo "<h1><font color=#FFFFFF>wh1ant</font>";
  echo "<font color=#2BF70E> site for blind SQL injection test</h1><br>";
  echo "<h1><font color=#2BF70E>num: </font><font color=#D2691E>".$info[0]."</font></h1>";
  echo "<h1><font color=#2BF70E>user: </font><font color=#D2691E>".$info[1]."</font>";
  echo "<body>";
  

?>
