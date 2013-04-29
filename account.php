<?php 
	session_start(); 
	require_once("header.php");
?>
<div id="content">
	<h2>Account</h2>
	<br>	
	<?php 
		if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))
		{
			echo '<p>Please login to view account information.</p>';
		}
		else
		{
			$db = mysql_connect("localhost", "root", "");
  			mysql_select_db("final", $db);
  			$query = "SELECT firstName, lastName, city, state, email, verified FROM users WHERE username = '".$_SESSION['login']."'";
  			$result = mysql_query($query,$db);
			$row = mysql_fetch_array($result);
			echo '<p>First Name: '.$row['firstName'].'</p><br>';
			echo '<p>Last Name: '.$row['lastName'].'</p><br>';
			echo '<p>City: '.$row['city'].'</p><br>';
			echo '<p>State: '.$row['state'].'</p><br>';
			echo '<p>Email: '.$row['email'].'</p><br>';
			echo '<p>Verified: '.$row['verified'].'</p><br>';
			if($row['verified'] == 'No')
			{
				echo '<p>Enter you activation key below:</p>';
				echo '<br><form action="activateAccount.php" method="post">';
				echo '<input type="text" name="activation" maxlength="256"> ';
				echo '<input type="submit">';
			}
		}
	?>
</div>
</body>
</html>