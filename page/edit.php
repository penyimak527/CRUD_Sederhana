<?php 
include "../koneksi/koneksi.php";
$id = $_GET['id'];
echo $id;

// ambil data dari database
$ambil_edit = "SELECT * FROM tugas WHERE id_tugas = $id";
$sql = $conn->query($ambil_edit);
$terambil = $sql->fetch_assoc();
var_dump($terambil);

$pilihan = array("Sudah", "Belum");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Todo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
	<div class="v_edit m-5">
		<div class="card">
			<div class="card-header">Edit Catatan</div>
			<div class="card-body">
				<form action="../controller/edit.php" method="post">
					<div class="form-group">
						<label for="" class="col-sm-2 col-form-label">Judul Tugas</label>
						<input type="hidden" name="no" value="<?php echo $terambil['id_tugas']?>" class="form-control" readonly>
						<input type="text" id="judul" class="form-control" placeholder="Input Judul" name="judul" value="<?php echo $terambil['judul_tugas'];?>">
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 col-form-label">Tugas</label>
						<input type="text" id="content" class="form-control" placeholder="Input Isi Tugas" name="content" value="<?php echo $terambil['isi_tugas']?>">
					</div>
					<div class="form-group">
						<label for="">Status Tugas</label>
						<select name="piliho" id="piliho" class="form-select">
							<option value="">--Pilih Status--</option>
							<?php
foreach ($pilihan as $key => $pilih) {
	if ($pilih === $terambil["status_tugas"]) {
		echo '<option value="' . $pilih . '" selected>' . ucfirst($pilih) . '</option>'; // Tambahkan 'selected'
	}else{
		echo '<option value="' . $pilih . '">' . ucfirst($pilih) . '</option>';
	}
}
							?>
						</select>
					</div>
				<a href="../index.php" class="btn btn-secondary m-2 ">Kembali</a>
				<button type="submit" class="btn m-2 btn-primary">Kirim Data</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>