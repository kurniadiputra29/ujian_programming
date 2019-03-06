<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
	<style type="text/css">
		body{
			font-family: 'Lato', sans-serif;
		}
		table{
			border: 2px outset black;
			width: 100%;
			margin-top: 20px;
		}
		table th{
			padding: 10px;
			border: 2px outset black;
		}
		table td{
			border: 2px outset black;
			text-align: center;
			padding: 5px;
		}
		a{
			text-decoration: none;
			text-transform: uppercase;
			color: blue;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<?php 
		include 'koneksi.php';
		$db = new database();
	?>

	<a href="input.php">Input Data</a>

	<table>
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
				<a href="edit.php?id=<?= $row['id']; ?>&aksi=edit">Edit</a> |
				<a href="proses.php?id=<?= $row['id']; ?>&aksi=hapus">Hapus</a>			
				</td>
			</tr>
			<?php 
			}
			?>
</table>
</body>
</html>
