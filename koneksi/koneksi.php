<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'daftar_tugas';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	echo "Koneksi gagal :". mysqli_connect_error();
}?>