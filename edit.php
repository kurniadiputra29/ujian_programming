<?php 
include 'koneksi.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit</title>
  <style type="text/css">
    div{
      width: 100px;
    }
    input{
      margin-top: 10px;
    }
  </style>
</head>
<body>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $data){
?>
        <div class="input-field">
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>">
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>">
        </div>
        <div>
          <label for="password">Password</label>
          <input type="text" name="password" id="password" value="<?php echo $data['password']; ?>">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
        <?php } ?>
</form>


</body>
</html>
