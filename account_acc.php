<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<style>
body{
background-image:url('img1.jpg');
background-position:center center;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;

	}
input{
	padding:5px 10px;
	position:absolute;
}
div{
	color:white;
	background-position:center center;
	text-align:left;
	padding:5px 10px;
	
	font-size:1em;
	position:absolute;
}
p{
color:white;
background-position:center center;
	font-size:1em;
	position:absolute;
	text-align:center;
}
.auto-style1{
	
	text-align:justify;
	position:absolute;
	font-size:1em;
	letter-spacing:2px;
	background-size:cover;
	background-position:left bottom;
	
	margin-top: 100px;
}
</style>

<?php include ('update.php'); ?>
<body>

	
	<form action="account_acc.php" method="post">
<?php include ('errors.php'); ?>

<div class="auto-style1">
<br>
<h1 style="color:white;">Καλώς Ήρθατε στο διαδικτυακό παιχνίδι με χαρτιά-Μουτζούρης</h1>
<br>
<div>
Username:<input type="text" id="user" name="txt44" class="text1">
<br></br><br>
Password:<input type="password" name="txt22" class="text2">
</div>
<br>
<br></br><br></br><br></br>
<input type="submit" value="Είσοδος" name="bt" >

<?php 
echo "<br><br></br><p>δεν εισαι member πατησε εδω για εγγραφή</p>";
echo "<br></br><input type='submit' value='Εγγραφή' formaction ='registration.php'>"; ?>


</div>

</form>
</body>

</html>
