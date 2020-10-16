<?php

  /*** info.php ***/

  $n = $_GET['num'];
  if(empty($n)){
    $n = 1;
  }

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $database = 'blind_db';

  $db = mysql_connect($host, $dbuser, $dbpass);
  mysql_select_db($database,$db);
  $sql = mysql_query("select * from `users` where myMemberID=".$n) or die (mysql_error());
  $info = @mysql_fetch_row($sql);
  echo "<body bgcolor=#000000>";
  echo "<h1><font color=#FFFFFF>wh1ant</font>";
  echo "<font color=#2BF70E> site for blind SQL injection test</h1><br>";
  echo "<h1><font color=#2BF70E>num: </font><font color=#D2691E>".$info[0]."</font></h1>";
  echo "<h1><font color=#2BF70E>user: </font><font color=#D2691E>".$info[1]."</font>";
  echo "<body>";
  mysql_close($db);

?>
