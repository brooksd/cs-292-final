<?php
session_start();
$user = $_SESSION['login'];
$table = mysql_real_escape_string($_GET['table']);
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("final") or die(mysql_error()); 
$sql= "INSERT INTO $table(user, $table) VALUES ('$user', '$_POST[data]')";
mysql_query($sql);
$url = 'forum.php';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>


