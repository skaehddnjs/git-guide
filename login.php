<?php
 include_once "./connect_db/connect_db.php";


 $myMemberID = $_GET['id'];

 $sql = "SELECT * FROM sql_injection where myMemberID={$myMemberID}";
 $result= $dbConnect->query($sql) or die("mysql_error()");
 $info = $result->fetch_array(MYSQLI_ASSOC);

 echo "number use {$myMemberID} member is".$info['userId'];

 echo "<body bgcolor=#000000>";  

 echo "<font color=#2BF70E> site for blind SQL injection test</h1><br>";
 #echo "<h1><font color=#2BF70E>num: </font><font color=#D2691E>".$info[userId]."</font></h1>";
 echo "<h1><font color=#2BF70E>user: </font><font color=#D2691E>".$info['userId']."</font>";
 echo "<body>";
?>