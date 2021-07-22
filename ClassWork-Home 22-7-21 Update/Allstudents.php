<?php
	include 'controllers/std_control.php';
	$students = getallStd(); 
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
			<tr align="center" >
				<td colspan="4">
					<h3>All Category</h3>
				</td>
			</tr>
			<tr>
			<tr>
				<td>
					<h2>SE</h2>
				</td>
				<br><br><br>
				<td>
					<h2>CSE</h2>
				</td>
				<td>
					<h2>EEE</h2>
				</td>
			</tr>
			</tr>
			<tbody>
				<?php
				$i=1;
					foreach($students as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Name"]."</td>";
							echo "<td>".$c["DOB"]."</td>";
							echo "<td>".$c["Credit"]."</td>";
							echo "<td>".$c["CGPA"]."</td>";
							echo "<td>".$c["Dept_id"]."</td>";
							echo '<td><a href="Edit_students.php?id='.$c['id'].'">Edit</a></td>';
							echo '<td><a href="Delete_students.php?id='.$c['id'].'">Delete</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
			</table>
		</form>
	</body>
</html>