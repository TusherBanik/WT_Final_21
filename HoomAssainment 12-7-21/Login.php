<?php

include 'controllers/temp.php';

?>





<html>
    <head><title>W E L L C O M E</title></head>
	<head><title>Log In</title></head>
	<body>
		<fieldset>
			<form action="" method="post">
			
			<fieldset>

				 <table align="center">
				 <tr>
					 
						<h1><td  align="center" colspan="3"><b>W E L L C O M E </td></h1>
						
					</tr>
					<tr>
					<br><br><br><br><br><br>
					    
						<td  align="center" colspan="3"><b>LOG IN </td>
						
					</tr>
					<tr>
						<td><b>Name</td>
						<td>
	           	<input type="text" placeholder="Name" name="name" value="<?php echo $name;?>"></td>
				<td><span><?php echo $err_name;?></span>

		</td>
					</tr>
					<tr>
						<td><b>Password </td>
						<td><input type="password" name="password" placeholder="Password" value="<?php echo $pass;?>"></td>
						<td><span><?php echo $err_pass;?></span>
					</tr>
					<br><br><br>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="Login" value="Login"><br>
						<span>Don't Registered yet?</span>
						<span><a target="_blank" href="Signup.php">Signup</a></span><br><br><br><br>
						<span><h1><?php echo $err_db; ?></h1></span>
						</td>
					</tr>
	                
	
	
	
				</table><br><br><br><br>
				</fieldset>
			</form>
		</fieldset>
	</body>
</html>		