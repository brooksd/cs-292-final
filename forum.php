<?php 
session_start(); 
require_once("header.php");
?>
<script type="text/javascript">
$(function() {
	$( "#accordion1" ).accordion({active:false, collapsible: true});
});
</script>

<body>

	<h2>Forum</h2>
	<?php
	if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))
	{
		echo '<br><h4>You must be logged in to post to the forum.</h4><br>';
	}
	?>

	<div id="accordion1"> 
		<h3>What do you think of John Jenkins?</h3>
		<div>
			<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error()); 
			mysql_select_db("final") or die(mysql_error()); 
			$ques1= mysql_query("SELECT * FROM question1") 
			or die(mysql_error());
			?>

			<i><?php
			while ($question1 = mysql_fetch_assoc($ques1)) 
			{ 
				echo '('.$question1['time'].') '.$question1['user'].' says: '.$question1['question1']."<br>";  
			}?> </i>

			<?php
			if ((isset($_SESSION['login']) && $_SESSION['login'] != ''))
			{
				echo '<form action="form.php?table=question1" method="post">';
				echo 'Write Here: <input type="text" name="data">';
				echo '<input type=submit>'; 
				echo '</form>';
			}
			?>
		</div>





		<h3>What do you think of Kevin Stallings?</h3>
		<div>
			<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error()); 
			mysql_select_db("final") or die(mysql_error()); 
			$ques2= mysql_query("SELECT * FROM question2") 
			or die(mysql_error());
			?>

			<i><?php
			while ($question2 = mysql_fetch_assoc($ques2)) 
			{ 
				echo '('.$question2['time'].') '.$question2['user'].' says: '.$question2['question2']."<br>";
			}?> </i>

			<?php
			if ((isset($_SESSION['login']) && $_SESSION['login'] != ''))
			{
				echo '<form action="form.php?table=question2" method="post">';
				echo  'Write Here: <input type="text" name="data">';
				echo  '<input type=submit>'; 
				echo '</form>';
			}
			?>
		</div>


		<h3>What do you think of Vanderbilt Commodores?</h3>
		<div>
			<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error()); 
			mysql_select_db("final") or die(mysql_error()); 
			$ques3= mysql_query("SELECT * FROM question3") 
			or die(mysql_error());
			?>

			<i><?php
			while ($question3 = mysql_fetch_assoc($ques3)) 
			{ 
				echo '('.$question3['time'].') '.$question3['user'].' says: '.$question3['question3']."<br>"; 
			}?> </i>

			<?php
			if ((isset($_SESSION['login']) && $_SESSION['login'] != ''))
			{
				echo '<form action="form.php?table=question3" method="post">';
				echo  'Write Here: <input type="text" name="data">';
				echo  '<input type=submit>'; 
				echo '</form>';
			}
			?>
		</div>


		<h3>What do you think of Vanderbilt's Defense?</h3>
		<div>
			<?php 
			mysql_connect("localhost", "root", "") or die(mysql_error()); 
			mysql_select_db("final") or die(mysql_error()); 
			$ques4= mysql_query("SELECT * FROM question4") 
			or die(mysql_error());
			?>

			<i><?php
			while ($question4 = mysql_fetch_assoc($ques4)) 
			{ 
				echo '('.$question4['time'].') '.$question4['user'].' says: '.$question4['question4']."<br>"; 
			}?> </i>

			<?php
			if ((isset($_SESSION['login']) && $_SESSION['login'] != ''))
			{
				echo '<form action="form.php?table=question4" method="post">';
				echo  'Write Here: <input type="text" name="data">';
				echo  '<input type=submit>'; 
				echo '</form>';
			}
			?>
		</div>





	</body>
	</html>