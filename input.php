<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
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
<form action="proses.php?aksi=tambah" method="post">
        <div>
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama">
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" >
        </div>
        <div>
          <label for="password">Password</label>
          <input type="text" name="password" id="password" >
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      
</form>
</body>
</html>
