<?php 
include "koneksi/koneksi.php";

$ambil = "SELECT * FROM tugas";
$sql = $conn->query($ambil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todo Listku</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="isi p-5">
<h1>Todo List</h1>
<a href="page/tambah.php" class="btn btn-primary btn-sm mb-2">Tambah Tugas</a>
<div class="card">
	<div class="card-header">Daftar Todo List</div>
	<div class="card-body">
		<table class="table table-hover">
			<thead class="">
				<tr>
					<th >No</th>
					<th >Judul</th>
					<th >Isi Tugas</th>
					<th >Status Tugas</th>
					<th >Dibuat pada</th>
					<th >Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
				 while ($bagian = $sql->fetch_assoc()) { ?>
				<tr>
				 <td><?php echo $no++?></td>
				 <td><?php echo $bagian['judul_tugas']?></td>
				 <td><?php echo $bagian['isi_tugas']?></td>
				 <td ><?php echo $bagian['status_tugas']?></td>
				 <td><?php echo $bagian['created_at']?></td>
				 <td><a href="page/edit.php?id=<?php echo $bagian['id_tugas']?>" class="btn btn-warning btn-sm m-1 ">Edit</a><a href="controller/delete.php?id=<?php echo $bagian['id_tugas']?>" class="btn btn-danger btn-sm m-1">Hapus</a></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div></div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 <script src="assets/script.js"></script>
</html>