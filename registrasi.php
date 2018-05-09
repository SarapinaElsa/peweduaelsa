<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Peserta</title>
</head>
<body>
<?php
	$kabupaten =[
					[
						'id'=>1,
						'nama_kab'=>"Kota Pontianak"
					],
					[
						'id'=>2,
						'nama_kab'=>"Sekadau"
					],
					[
						'id'=>3,
						'nama_kab'=>"Sintang"
					]
				];
	?>
<h1>Registrasi</h1>
	<form method="GET" action="proses.php">
<table>
	<tr>
		<td><label for="nama">Nama</label></td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td><label for="username">Username</label></td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td><label for="password">Password</label></td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><label for="no_hp">No.Hp</label></td>
		<td>:</td>
		<td><input type="number" name="no_hp"></td>
	</tr>
	<tr>
		<td><label for="">Alamat"</label></td>
		<td>:</td>
		<td><textarea name="alamat" cols="20" rows="3"></textarea></td>
	</tr>
	<tr>
		<td><label for="">Kabupaten</label></td>
		<td>:</td>
		<td>
			<select name="kabupaten">
			<?php foreach ($kabupaten as $kab): ?>
			<option value="<?php echo $kab['id']?>"><?php echo $kab['nama_kab'] ?></option>
		<?php endforeach ?>
				
			</select>
		</td>
	</tr>
	<tr>
			<td><label for="jenis_kelamin"></label></td>
			<td>:</td>
			<td>
				<input type="radio" name="jenis_kelamin" value="0">pria
				<input type="radio" name="jenis_kelamin" value="1">wanita
				</td>
	</tr>
				<tr>
					<td><label for="">pilihan prodi</label></td>
					<td></td>
					<td>
						<input type="checkbox" name="Sisfo" value="prodi0">Sistem Informasi </br>
							<input type="checkbox" name="Siskom" value="prodi1">Sistem Komputer </br>
								<input type="checkbox" name="Informatika" value="prodi2">Teknik Informatika</br>
					</td>
					</tr>
					<tr>
					<td>
							<input type="submit" name="submit" value="simpan">
							<input type="reset" name="submit" value="batal">
					</td>
					</tr>
</table>
</form>
</body>
</html>