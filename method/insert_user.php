<?php 
	include '../config/database.php';

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nm_gejala = $_POST['nm_gejala'];
	$pg_gejala = $_POST['pg_gejala'];
	$nm_penyakit = $_POST['nm_penyakit'];
	$pg_penyakit = $_POST['pg_penyakit'];


	$sql = "INSERT INTO user (first_name, last_name, email, password, username, nm_penyakit, nm_gejala, pg_gejala, pg_penyakit)
    VALUES ('".$first_name."', '".$last_name."', '".$email."','".$password."','".$username."','".$nm_gejala."','".$nm_penyakit."','".$pg_penyakit."','".$pg_gejala."')";
    // use exec() because no results are returned
    $pdo->exec($sql);
    header("location:../index.php");
?>   