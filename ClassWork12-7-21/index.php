<?php
include 'header.php';
include 'db.php';
$query ="select id,name,username from users";

$result - get($query);
echo "<pre>";
print_r($result);
echo "table border='1'";
echo "<tr>
      <tr>Name</tr><tr>Id</tr><tr>Username</tr>
</tr>";

foreach($result as $row){
  echo "<tr>";
	  echo "<td>".$row["name"]."</td>";
	  echo "<td>".$row["id"]."</td>";
	  echo "<td>".$row["username"]."</td>";
  echo"</tr>";
	
}






?>