<?php
include "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Todo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
	<div class="v_tambah m-5">
		<div class="card">
			<div class="card-header">Tambah Catatan</div>
			<div class="card-body">
				<form action="../controller/tambah.php" method="post">
					<div class="form-group">
						<label for="" class="col-sm-2 col-form-label">Judul Tugas</label>
						<input type="text" id="judul" class="form-control" placeholder="Input Judul" name="judul">
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 col-form-label">Tugas</label>
						<input type="text" id="content" class="form-control" placeholder="Input Isi Tugas" name="content">
					</div>
				<a href="../index.php" class="btn btn-secondary m-2 ">Kembali</a>
				<button type="submit" class="btn m-2 btn-primary">Kirim Data</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>