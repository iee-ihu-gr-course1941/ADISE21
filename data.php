<?php
require_once "lib/dbconnect.php";
require_once "lib/users.php";
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);
if($input==null) {
    $input=[];
}
if(isset($_SERVER['HTTP_X_TOKEN'])) {
	$input['token']=$_SERVER['HTTP_X_TOKEN'];
}
else{
	$input['token']='';
}


switch ($r=array_shift($request)) {
case 'board' : 
switch ($b=array_shift($request)) {
case '':
case null: handle_board2($method,$input);
break;

}
}

function handle_board2($method,$input){
if($method == 'GET'){
	show_board2($input);
}
else if ($method == 'POST'){
	reset_board();
	show_board($input);
}
else{
	header('HTTP/1.1 405 Method Not Allowed');
}	
}
function show_board2($input) {
	global $mysqli;
	
	$b=current_color($input['token']);
	if($b) {
		show_board_by_player2($b);
	} else {
		header('Content-type: application/json');
		print json_encode(read_board2(), JSON_PRETTY_PRINT);
	}
}

function read_board2(){
global $mysqli;


	$sql = "SELECT * FROM cards_board ";
	$st = $mysqli->prepare($sql);
	$st->execute();
	$res = $st->get_result();
	return($res->fetch_all(MYSQLI_ASSOC));


}
function convert_board(&$orig_board) {
	$board=[];
	foreach($orig_board as $i=>&$row) {
		$board[$row['x']][$row['y']] = &$row;
	} 
	return($board);
}

function show_board_by_player2($b) {

	global $mysqli;
    
	$orig_board=read_board2();
	$board=convert_board($orig_board);
	$status = read_status();
	if($status['status']=='started' && $status['p_turn']==$b && $b!=null) {
		// It my turn !!!!
		$n = add_valid_moves_to_board($board,$b);
		
		// Εάν n==0, τότε έχασα !!!!!
		// Θα πρέπει να ενημερωθεί το game_status.
	}
	header('Content-type: application/json');
	print json_encode($orig_board, JSON_PRETTY_PRINT);
}

?>