<?php
  	$firstName = $_POST[firstName];
  	$lastName = $_POST[lastName];
  	$city = $_POST[city];
  	$state = $_POST[state];
  	$email = $_POST[email];
  	$username = $_POST[username];
  	$password = $_POST[pass];
  	$hashword = hash("md5", $password); 
  		
  	preg_match("/^[a-zA-Z ]+$/", $firstName) or die ("Invalid character(s) in first name.  Press back to try again.");
  	preg_match("/^[a-zA-Z ]+$/", $lastName) or die ("Invalid character(s) in last name.  Press back to try again.");
  	preg_match("/^[a-zA-Z ]+$/", $city) or die ("Invalid City.  Press back to try again.");
  	preg_match("/^[A-Z]{2}$/", $state) or die ("Invalid State.  Use all caps abbreviation, i.e. TN. Press back to try again.");
  	preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email) or die ("Invalid email.  Press back to try again.");
  	preg_match("/^[0-9A-Za-z]+$/", $username) or die("Username can only contain letters and numbers.  Press back to try again.");
  	preg_match("/^[0-9A-Za-z]+$/", $password) or die("Password can only contain letters and numbers.  Press back to try again.");

  	$activationkey = sha1(mt_rand(10000,99999) . time());
  		
  	$db = mysql_connect("localhost", "root", "");
  	mysql_select_db("test", $db);
  	$query = "INSERT INTO users (firstName, lastName, city, state, email, username, password, role, activation, verified)
  	VALUES
  	('$firstName','$lastName','$city','$state','$email','$username','$hashword','member','$activationkey','false')";
  	mysql_query($query,$db);
  	mysql_close($db);
  		
  	session_start();
  	$_SESSION['login']=$username;
  	$_SESSION['role']='member';
  		
		$to = "devin.m.brooks@gmail.com";
		$subject = "Welcome to the Vandy Basketball Fan Site!";
		$message = "Hello $firstName! \n\nPlease enter the following registration code to verify your account: \n\n$activationkey";
		$from = "donotreply@vandybasketball.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
  	header("Location: index.php");	 
?>