


<?php 
  session_start(); 
  
  if (!isset($_SESSION['txt44'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: account_acc.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['txt44']);
  	header("location:account_acc.php");
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width = device-width,initial-scale= 1">
<meta name= "description" content="">
<meta name="author" content= "">
<title>cards_game</title>

<link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/cards_css.css" rel="stylesheet">
<script src="bootstrap-5.1.3-dist/jQuery-3.2.1.min.js"></script>
<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="js/cards_jc.js"></script>
<script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>

</head>



<body> 

<h1>Μουτζούρης</h1>
  	<form action="cards_game.php" method="POST">
  	<div class="header">
 <?php  
 
 if (isset($_SESSION['txt44'])){
  //
//<link href="jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet"> 
   require_once "lib/dbconnect.php";
     
    $username = $_SESSION['txt44'];
    
    $sql = "SELECT * FROM players WHERE username = '$username'";
    $result = mysqli_query($mysqli ,$sql);
    $row = mysqli_fetch_assoc($result);
    echo "<p style='text-align:center;'><strong>Καλώς Ήρθατε {$row['firstName']}</strong></p>";
    echo '<p style="text-align:center;"> <a  href="account_acc.php?logout="1"" style="color: red;">logout</a> </p>';
 }
    ?>
    </div>	
</form>

<div id='cards_board2'>

</div>
<div id='game_initializer'>
	<input id='user'>
	<select id='pcolor'>
	<option value='D'>DOWN</option>
	<option value='T'>TOP</option>
	</select>
    
	<button id='cards_login' >Είσοδος στο Παιχνίδι</button>
	</div>
	<br></br>
	<div id='game_info'>

	</div>
	<br></br>
	 <div id="move_div">
    <input id='the_move'><button id='do_move' class='btn btn-primary'>ΚΑΝΕ ΤΗΝ ΚΙΝΗΣΗ</button><br>
	Δώσε κίνηση (x1 y1): <input id='the_move_src'> (x2 y2):
	<select id='the_move_dest'></select>
	<button id='do_move2' class='btn btn-primary'>ΚΑΝΕ ΤΗΝ ΚΙΝΗΣΗ 2</button><br>
	</div>
	<div style="text-align:center;">
	<button id='cards_reset' class='btn btn-primary'>ΕΝΑΡΞΗ/RESET</button>
	<br></br>
	<button><a href="cards_info.html">Πληροφορίες Παιχνιδιού</a></button>
	</div>	
	
	

<br>
</br>

</body>

</html>
