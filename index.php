<?php 
	session_start(); 
	require_once("header.php");
?>
<div id="content">
	<?php 
		if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))
		{
			echo '<h4>Please login below:</h4>';
			echo '<br><form action="verifyLogin.php" method="post">';
			echo 'Username: <input type="text" name="username" maxlength="50"><br><br>';
			echo 'Password: <input type="password" name="password" maxlength="16"><br><br>';
			echo '<input type="submit">';
			echo '</form>';
			echo '<br><p>If you do not have account click <a href="signup.php">here</a> to sign up.</p>';
		}
		else
		{
			echo '<h4>Welcome '.$_SESSION["login"].'! Explore the website by clicking on the links above.</h4>';
			echo '<br>Click <a href="logout.php">here</a> to logout!<br>';
		}
	?>
	<br>
	<a href="https://twitter.com/VandyMBB" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @VandyMBB</a>
	<script>!
		function(d,s,id)
		{
			var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id))
			{
				js=d.createElement(s);
				js.id=id;
				js.src=p+'://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js,fjs);
			}
		}
		(document, 'script', 'twitter-wjs');
	</script>
</div>
</body>
</html>
