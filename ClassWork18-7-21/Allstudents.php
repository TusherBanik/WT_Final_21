<html>
	<head>
	<title>All Students</title></head>
	<body><h1>All Students</h1>	</body>
</html>	
	<?php 
	include 'Dashboard.php';
	include 'controllers/CategoryController.php';
	
	$cat=getAllstu();
	?>
	


	<?php
	
                    $i=1;
					foreach($cat as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["name"]."</td>";
							echo '<td><a href="Edit_cateogory.php?id='.$c['id'].'">Edit</a></td>';
							
						echo "</tr>";
						$i++;
					}
	
	
	?>