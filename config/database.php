
<?php

	$host     = '127.0.0.1';
	$dbname   = 'db_akun';
	$username = 'root';
	$password = '';
	$charset  = 'utf8';
	$collate  = 'utf8_unicode_ci';
	$dsn      = "mysql:host=$host;dbname=$dbname;charset=$charset";
	$options  = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_PERSISTENT         => false,
		PDO::ATTR_EMULATE_PREPARES   => false,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
	];


	try {
		$pdo = new PDO($dsn, $username, $password, $options);
	}
	catch(PDOException $e){
	    die ( "Connection failed: " . $e->getMessage());
}
?>