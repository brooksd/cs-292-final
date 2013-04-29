<?php
    if(empty($_POST['username']))
    {
        die("The username field was empty.  Please try again.");
    }
     
    if(empty($_POST['password']))
    {
        die("The password field was empty.  Please try again.");
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashword = hash("md5", $password); 
	
	  preg_match("/^[0-9A-Za-z]+$/", $username) or die("Username can only contain letters and numbers.  Please press back and try again.");
    preg_match("/^[0-9A-Za-z]+$/", $password) or die("Password can only contain letters and numbers.  Please press back and try again.");
      	
  	$db = mysql_connect("localhost", "root", "");
  	mysql_select_db("final", $db);
  	
  	// Verify Users
  	$query = "SELECT password, role FROM users WHERE username = '$username'";
  	$result = mysql_query($query,$db);
  	
  	if(mysql_num_rows($result) > 0)
  	{
  		$row = mysql_fetch_array($result);
  		$dbhashword = $row['password'];
  		$role = $row['role'];
		if (hash("md5", $password) != $dbhashword) 
		{
   			die("The username and password do not match.  Please try again.");
		}
	}
	else
	{
		die("The username was not found in the system.");
	}
  	
  	mysql_close($db);
  		
  	session_start();
  	$_SESSION['login'] = $username;
  	$_SESSION['role'] = $role;	
  	header("Location: index.php");
?>