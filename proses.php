<!DOCTYPE html>
<html>
<head>
	<title>Halaman pemroesan</title>
</head>
<h1>Selamat bergabung</h1>
<p>Anda terdaftar dengan identitas</p>
<body>
	<tr>
		<td><lable>Nama</lable></td>
		<td>:</td>
		<td><?php echo $_GET ['nama'];?></td>
	</tr>
	<tr>
		<td><lable>Alamat</lable></td>
		<td>:</td>
		<td><?php echo $_GET ['alamat'];?></td>
	</tr>
	<tr>
		<td><lable>Username</lable></td>
		<td>:</td>
		<td><?php echo $_GET ['username'];?></td>
	</tr>
</body>
</html>