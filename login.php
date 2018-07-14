<?php 
include 'config/database.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM user WHERE username='".$username."' AND password='".$password."' "); 
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

if(!empty($result)){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:member/index.php");
}else{
	header("location:index.php");	
}
 
?>