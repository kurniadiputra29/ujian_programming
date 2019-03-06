<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<?php 
		include 'koneksi.php';
		$db = new database();
	?>

	<a href="input.php">Input Data</a>

	<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			<?php
			$no = 1;
			foreach($db->tampil_data() as $row){
			?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['password']; ?></td>
				<td>
				<a href="edit.php?id=<?= $row['id']; ?>&aksi=edit">Edit</a>
				<a href="proses.php?id=<?= $row['id']; ?>&aksi=hapus">Hapus</a>			
				</td>
			</tr>
			<?php 
			}
			?>
</table>
</body>
</html>
