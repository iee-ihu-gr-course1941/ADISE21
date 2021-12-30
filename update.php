<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Update</title>

</head>
<?php
session_start();


// initializing variables
$Fname = "";
$Lname = "";
$address    = "";
$username = "";
$errors = array(); 

require_once "lib/dbconnect.php";

// REGISTER USER
if (isset($_POST['bt1'])) {
  // receive all input values from the form
  $Fname = mysqli_real_escape_string($mysqli, $_POST['txt1']);
  $Lname = mysqli_real_escape_string($mysqli, $_POST['txt2']);
  $address = mysqli_real_escape_string($mysqli, $_POST['txt3']);
  $username = mysqli_real_escape_string($mysqli, $_POST['txt4']);
  $password_1 = mysqli_real_escape_string($mysqli, $_POST['txt5']);
  $password_2 = mysqli_real_escape_string($mysqli, $_POST['txt6']);
 
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Fname)) { array_push($errors, "First name is required"); }
  if (empty($Lname)) { array_push($errors, "Last name is required"); }
  if (empty($address)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "Username is required");}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM players WHERE username='$username' OR email='$address' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) { // if user exists
    if ($user['txt4'] == $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['txt3'] == $address) {
      array_push($errors, "email already exists");
    }
  }
  
 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "insert into players(firstName,lastName,email,username,password) 
  			  values('$Fname','$Lname','$address','$username','$password')";
	
  			  
     mysqli_query($mysqli, $query);
  	$_SESSION['txt1'] = $Fname;
  	$_SESSION['txt4'] = $address;
  	$_SESSION['success'] = "Έχετε Συνδεθεί στον Λογαριασμό σας!";
  	header("location:cards_game.php ");
  }
 }
if (isset($_POST['bt'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['txt44']);
  $password = mysqli_real_escape_string($mysqli, $_POST['txt22']);
    if (empty($username)) {
  	array_push($errors, "Username is required");
  	
  }
  
  else if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM players WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($mysqli, $query);
  	  	if (mysqli_num_rows($results) == 1) {
  	  	
      $_SESSION['txt44'] = $username;
  	  $_SESSION['success'] = "Έχετε Συνδεθεί στον Λογαριασμό σας!";
   	  header('location:cards_game.php ');
  	}else {	
  		array_push($errors,"Wrong username/password combination");
  	}
  }
}

?>
</html>
