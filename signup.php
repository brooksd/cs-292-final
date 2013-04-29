<?php 
	session_start(); 
	require_once("header.php");
?>
<div id="content">
	<h2>Registration</h2>
	<br>
	<form action="insertUser.php" method="post">
		First Name: <input type="text" name="firstName"><br><br>
		Last Name: <input type="text" name="lastName"><br><br>
		City: <input type="text" name="city" maxlength="50"><br><br>
		State (Abbr.): <input type="text" name="state" size="3" maxlength="2"><br><br>
		Email: <input type="text" name="email"><br><br>
		Username: <input type="text" name="username" maxlength="50"><br><br>
		Password: <input type="password" name="pass" maxlength="16"><br><br>
	<input type="submit">
	</form>
</div>
</body>
</html>