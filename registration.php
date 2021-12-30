<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<style>
body{
background-color:#004100;
	background-repeat:no-repeat;
	background-position:center center;
	background-size:cover;
	background-attachment:fixed;
}
p{
	color:white;
	text-align:center;
}
.input1{
	color:white;
	text-align:center;
	padding:5px 10px;
	border:1px solid black;
	background-position:center;
	position:relative;
	
}

</style>
<?php include ('update.php'); ?>
<body>
<form action="registration.php" method="post">
<?php include ('errors.php'); ?>
<div class="input1">
<label>First Name</label>
<input type="text" name="txt1" placeholder="First name">
</div>
<div class="input1">
<label>Last Name</label>
<input type="text" name="txt2" placeholder="Last name">
</div>
<div class="input1">
<label>Email</label>
<input type="email" name="txt3" placeholder="email">
</div>

<div class="input1" id="game_initializer">
<label>Username</label>
<input type="text" name="txt4" placeholder="username" id="user">
</div>
<div class="input1">
<label>Password</label>
<input type="password" name="txt5" placeholder="password">
</div>
<div class="input1">
<label>Confirm Password</label>
<input type="password" name="txt6" placeholder="Confirm password">
</div>
<div class="input1">
<input type="submit" name="bt1" value="Register">
</div>
<p class="input1">
Already a member? <a href="account_acc.php">Sign in</a>
</p>
</form>

</body>

</html>
