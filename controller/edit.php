<?php
include "../koneksi/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = $_POST['no'];
$judul = $_POST['judul'];
$isi = $_POST['content'];
$pilihan = $_POST['piliho'];
}else{
	echo "<script>alert('Gagal mengambil data!');</script>";
}
$edit = "UPDATE tugas set judul_tugas= ?, isi_tugas=?, status_tugas=? WHERE id_tugas= $id ";
$sql = $conn->prepare($edit);
$sql->bind_param('sss', $judul, $isi, $pilihan);

if ($sql->execute()	== true) {
	echo "berhasil";
}else{
	echo "Gagal". $sql->error();
	die();
}
$conn->close();
$sql->close();

?>