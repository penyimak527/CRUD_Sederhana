<?php
include "../koneksi/koneksi.php";
$id = $_GET['id'];
echo $id;

$hapus = "DELETE FROM tugas WHERE id_tugas = $id";
$sql = $conn->query($hapus);
echo $sql;

if ($sql ==  true) {
		echo "<script>
	alert('Data berhasil dihapus!');
	window.location.href = '../index.php';
	</script>";
}else{
	echo "gagal mengirim data nya ". $sql->error();
	die();
}
 $sql->close();
 $conn->close();
?>