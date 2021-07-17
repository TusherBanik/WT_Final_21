<?php
include 'main_header.php';
?>

<?php
include 'control/temp.php'; //usercontrolar.php
?>
<----singup---->
<div class ="center-loging">
<h1 class- "text text-center">singup</h1>
<form action - " " method - "post" class - "form-horizontal form-material">
<div class="form-group">
   <h4 class="text">Name</h4>
   <input type - "text" name -"name" value - " <?php echo $name;?>" class - "form-control">
   <span> " <?php echo$err_name;?> </span>
</div>

<div class="form-group">
   <h4 class="text">Username</h4>
   <input type - "text" name - "uname" value - " <?php echo $uname;?>" class - "form-control">
    <span> " <?php echo$err_uname;?> </span>
</div>

<div class="form-group">
   <h4 class="text">Email</h4>
   <input type - "text" name - "email" value - " <?php echo $email;?>"class - "form-control">
    <span> " <?php echo$err_email;?> </span>
</div>

<div class="form-group">
   <h4 class="text">Password</h4>
   <input type - "text" name - "pass" value - " <?php echo $pass;?>" class - "form-control">
    <span> " <?php echo$err_pass;?> </span>
</div>
<div> class="form-group text-center">
  <input type - "submit" class- "btn btn-success" value- "singup" class- "from-control">
</div>
</form>
</div>