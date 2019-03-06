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
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
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
		</tbody>
</table>
</body>
</html>



<?php 
include 'database.php';
$db = new database();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Hakko Bio Richard" />
    <title>OOP Input Data</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<div class="col s12">
<a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <table class="highlight">
        <thead>
          <tr>
          <th data-field="id">No</th>
              <th data-field="id">Nama</th>
              <th data-field="name">Alamat</th>
              <th data-field="price">Usia</th>
              <th data-field="price">Email</th>
              <th data-field="price">Tool</th>
          </tr>
        </thead>
<?php
    $no = 1;
    foreach($db->tampil_data() as $data){
    ?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['usia']; ?></td>
        <td><?php echo $data['email']; ?></td>
            <td> 
              
     
      <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating yellow darken-2"><i class="material-icons">mode_edit</i></a>
      <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus" class="btn-floating green"><i class="material-icons">delete</i></a>
  
            </td>
          </tr>
        </tbody>
        <?php 
    }
    ?>
      </table>
</div>
    </div>
  
<footer class="page-footer blue darken-1">
          <div class="footer-copyright">
            <div class="container">
           Hakko Bio Richard | Copyright © 2017 
            <a class="grey-text text-lighten-4 right" href="http://www.hakkoblogs.com">More Tutorial</a>
            </div>
          </div>
        </footer>
        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>