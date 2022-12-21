<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpns";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM berkas";
$berkas = $conn->query($sql);

$sql = "SELECT * FROM diberi";
$diberi = $conn->query($sql);

$sql = "SELECT * FROM jabatan";
$jabatan = $conn->query($sql);

$sql = "SELECT * FROM lokasi";
$lokasi = $conn->query($sql);

$sql = "SELECT * FROM panitia";
$panitia = $conn->query($sql);

$sql = "SELECT * FROM soal";
$soal = $conn->query($sql);

$sql = "SELECT * FROM users";
$users = $conn->query($sql);

?>