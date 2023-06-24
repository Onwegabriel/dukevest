<?php
// define ('DB_HOST','localhost');
// define ('DB_USER','root');
// define ('DB_PASS','');
// define ('DB_NAME','mydb');


// try {
//     $dbh =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
// } catch (PDOException $e) {
//     exit ("error" . $e->getMessage());
// }

// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

date_default_timezone_set('America/Los_Angeles');

$dbhost = 'localhost';

$dbname = 'mydb';

$dbuser = 'root';

$dbpass = '';


// define("BASE_URL", "");

// Getting Admin url
// define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$dbh = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}


?>