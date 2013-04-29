<?php
	session_start();
    if(empty($_POST['activation']))
    {
        die("The activation key field was empty. Please try again.");
    }
         
    $userkey = trim($_POST['activation']);
          	
  	$db = mysql_connect("localhost", "root", "");
  	mysql_select_db("final", $db);
  	
  	// Verify Users
  	$query = "SELECT activation FROM users WHERE username = '".$_SESSION['login']."'";
  	$result = mysql_query($query,$db);  	
  	$row = mysql_fetch_array($result);
  	$dbkey = $row['activation'];
	if ($userkey == $dbkey) 
	{
   		$query = "UPDATE users SET verified = 'true' WHERE username = '".$_SESSION['login']."'";
   		mysql_query($query,$db);
   		mysql_close($db);
   		header("Location: CS292HW4Account.php");
   	}
	else
	{
		die("The activation key you entered was not correct.  Please try again.");
	}
?>