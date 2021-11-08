<?php
// configuration
$dbtype		= "mysql";
$dbhost 	= "localhost";
$dbname		= "memoriaj_site1";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

?>
