<?php 
	session_start(); 
	require_once("header.php");
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').dataTable({
        "bLengthChange": false,
        "bFilter": false
    });
});              
</script>
<div id="content">
<h2>Statistics</h2>
</br>
	<?php
      $db = mysql_connect("localhost", "root", "");
      mysql_select_db("final", $db);
      $result = mysql_query('SELECT * FROM statistics', $db);
      echo "<table id='datatable' class='display'>
          <thead>
            <tr>
              <th>Name</th>
              <th>PPG</th>
              <th>MPG</th>
              <th>Number</th>
            </tr>
          </thead>
          <tbody>";

      while($row = mysql_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['points'] . "</td>";
        echo "<td>" . $row['minutes'] . "</td>";
         echo "<td>" . $row['number'] . "</td>";
        echo "</tr>";
      }
      echo "
      </tbody>
      </table>";
      mysql_close($db);
  ?>
</div>
</body>
</html>