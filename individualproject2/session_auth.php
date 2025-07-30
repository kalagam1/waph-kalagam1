<?php
    $lifetime=15*60;
    $path="/";
    $domain="kalagam1.waph.io";
    $secure=TRUE;
    $httponly=TRUE;
    session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly);
	session_start();
	if(isset($_POST["username"]) and isset($_POST["password"])){
	if (checklogin_mysql($_POST["username"], $_POST["password"])) {
		$_SESSION["authenticated"]=TRUE;
		$_SESSION["username"]=$_POST["username"];
	}else{
		session_destroy();
		echo "<script>alert('Invalid username/password'); window.location='login.php'; </script>";
		header("Refresh:0; url=login.php");
		die();
	}
}
if(!isset($_SESSION["authenticated"]) or $_SESSION["authenticated"] !=true){
	session_destroy();
	echo "<script>alert('You have not logged in. Please login first');</script>";
	header("Refresh:0; url=login.php");
	die();
}
if($_SESSION['browser']!=$_SERVER['HTTP_USER_AGENT']){
	echo "<script>alert('Session hijacking is detected!!!');</script>";
	header("Refresh:0; url=login.php");
	exit();
}

function checklogin_mysql($username, $password) {
		$mysqli = new mysqli('localhost', 'kalagam1', 'Mahi@123', 'waph');
	if ($mysqli->connect_errno) {
		printf("Database connection failed: %s\n", $mysqli->connect_erroг);
		exit();
}
$sql="SELECT * FROM users WHERE username= '$username' AND password=md5('$password');";
//$stmt= $mysqli->prepare($prepared_sql);
//$stmt->bind_param("ss", $username, $password);
//$stmt->execute();
$result=$mysqli->query($sql);
//$result=$stmt->get_result();
//echo "DEBUG>sql=$sql";
if($result && $result->num_rows ==1) return TRUE;
return FALSE;
}
?>
