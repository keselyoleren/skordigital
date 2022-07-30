<?php
/*
mysql_connect("localhost","root","") or
 die('Could not connect to the database!');


mysql_select_db("bankdatasho") or
 die('No database selected!'); */
// require_once realpath(__DIR__ . '/vendor/autoload.php');

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// echo $dotenv;
// $dotenv->load();

// $userName = $_ENV['DB_NAME'];

// echo $userName;
 

$koneksi = mysqli_connect("localhost","root","root","skordigital");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
?>