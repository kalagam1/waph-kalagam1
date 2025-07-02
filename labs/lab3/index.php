<?php
	session_start();
	if (checklogin_mysql($_POST["username"], $_POST["password"])) {
?>
	<h2> Welcome <?php echo $_POST['username']; ?> !</h2>
<?php
	}else{
	echo "<script>alert('Invalid username/password'); window.location='form.php'; </script>";
	die();
}
function checklogin($username, $password) {
	$account = array("admin", "Mahi@123");
	if (($username== $account[0]) and ($password== $account[1]))
		return TRUE;
	else
		return FALSE;
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
