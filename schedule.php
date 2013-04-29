<?php 
session_start(); 
require_once("header.php");
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#schedule').dataTable({
		"bLengthChange": false,
		"bFilter": false
	});
});
</script>
<div id="content">
	<h2>Schedule</h2><br>
	<h4>Check below to see when your Dores are going to be in action!</h4><br>
	<table id="schedule">
		<thead>
			<tr>
				<th>Date</th>
				<th>Venue</th>
				<th>Opponent</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$db = mysql_connect("localhost", "root", "");
			mysql_select_db("final", $db);
			$query = "SELECT * FROM schedule";
			$result = mysql_query($query, $db);
			while($row = mysql_fetch_array($result))
			{
				echo '<tr>';
				echo '<td>'.$row['date'].'</td>';
				echo '<td>'.$row['venue'].'</td>';
				echo '<td>'.$row['opp'].'</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
