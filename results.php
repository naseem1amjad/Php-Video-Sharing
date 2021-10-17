<?php include 'includes/downloadsLogic.php';?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>View files</title>
</head>
<body>
<br>
<a href="index.php">Upload Files</a>
<table class="headingTable">
<tr><td class="headingTd">
<h2 class="heading">Video Upload Results Page</h2>
</td></tr>
</table>
<table>
<thead>    
    <th>NAME</th>
    <th>TYPE</th>
	<th>STATUS</th>
</thead>
<tbody>
<?php $mycount=1;
  foreach ($files as $file):
	    if ($mycount==1):
		
		echo "<tr>";
		echo "<td colspan=3>";
		echo "<table class='firstRow'>";
		echo "<tr class='firstRow'>";
		echo "<td class='firstRow'>";
		echo $file['First_Name']." ".$file['Last_Name'];
		echo "</td>";
		echo "<td class='firstRow'>".$file['Video_Type']."</td>";
	    //echo "<td class='firstRow'>".$file['Status']."</td>";
		echo "<td class='firstRow'>Reviewing</td>";
		echo "</tr>";
		echo "<tr class='firstRow'>";
		echo "<td class='firstRow' colspan=2>";
		//echo $file['name'];
		echo "<video width='320' height='240' controls><source src='uploads/".$file['name']."' type='video/mp4'></video>";
		echo "</td>";
		echo "<td class='firstRow'><table class='firstRow'><tr class='firstRow'><td class='firstRow'><a href='downloads.php?del_id=".$file['id']."'><button class='ApproveButton'>Approve & Upload</button></a></td></tr>";
		echo "<tr class='firstRow'><td class='firstRow'><a href='results.php?del_id=".$file['id']."'><button class='RejectButton'>Reject & Purge</button></a></td></tr></table></td>";
		
		echo "</tr>";
		echo "</table>";
		echo "</td>";
		echo "</tr>";
		
		
		$mycount++;
	 else: ?>
    <tr>
      <td><?php echo $file['First_Name']." ".$file['Last_Name']; ?></td>
      <td><?php echo $file['Video_Type']; ?></td>
	  <td><?php echo $file['Status']; ?></td>
	  <!--
	  <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">View</a></td>
	<td><a href="downloads.php?del_id=<?php echo $file['id'] ?>">Purge</a></td>
	-->
	</tr>
	<?php endif; ?>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
