<?php
include "../koneksi/koneksi.php";

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
	// code...
$judul = $_POST['judul'];
$isi = $_POST['content'];
$status = 'Belum';
}
$tambah = "INSERT into tugas (judul_tugas, isi_tugas, status_tugas) VALUES(?, ?, ?)";
$sql = $conn->prepare($tambah);
// untuk menentukan type data nya (s: string, i: integer)
$sql->bind_param('sss', $judul, $isi, $status);

if ($sql->execute() == true) {
	echo "<script>
	alert('Data berhasil dikirim!');
	window.location.href = '../index.php';
	</script>";
}else{
	echo "Data gagal dikirim :". $sql->error();
	die();
}
 $sql->close();
 $conn->close();



?>