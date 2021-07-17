<?php

include 'controllers/temp.php';

?>



<html>
	<h2><head><title>Sign Up</title></head><h2>
	<body>
		<fieldset>
			<form action="" method="post">
			
			<fieldset>
			<h3><?php echo $err_db; ?></h3>
				 <table align="center">
					<tr>
					
						<h2><td  align="center" colspan="3"><b>Sign Up </td><h2>
						
					</tr>
					<tr>
						<td><b>Name </td>
						<td><input type="text" placeholder="Name" name="name" value="<?php echo $name;?>"></td>
				       <td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td><b>Username </td>
						<td><input type="text" placeholder="Username" name="uname" value="<?php echo $uname;?>"></td>
				       <td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td><b>Email</td>
						<td><input type="text" placeholder="Email" name="email" value="<?php echo $email;?>"></td>
				       <td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td><b>Password </td>
					<td><input type="text" name="password" placeholder="Password" value="<?php echo $pass;?>"></td>
						<td><span><?php echo $err_pass;?></span>
					</tr>
					<br><br><br>
					<tr>
						<td align="center" colspan="2"><input name="signup" type="submit" value="SignUp">
						</td>
						
					
					</tr>
	
				</table><br><br><br><br>
				</fieldset>
			</form>
		</fieldset>
	</body>
</html>		