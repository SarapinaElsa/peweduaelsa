<!DOCTYPE html>
<html>
<head>
	<title>Belajar Array </title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1> Belajar Array</h1>
<?php
$mahasiswa = ["elsa","riri","gagas","nisa","viva"];
$prodi =[
		[
		"id"=>1,
		"nama"=>"sisfo",
		"kuota"=>58,
		"kaprodi"=>"Ilhamsyah"

		 ],
		 [
		"id"=>2,
		"nama"=>"kelautan",
		"kuota"=>32,
		"kaprodi"=>"Nora"

		 ],
		 [
		"id"=>3,
		"nama"=>"kimia",
		"kuota"=>40,
		"kaprodi"=>"Andi"

		 ],
		 [
		"id"=>4,
		"nama"=>"fisika",
		"kuota"=>25,
		"kaprodi"=>"Nurhasanah"

		 ],
		 [
		"id"=>5,
		"nama"=>"biologi",
		"kuota"=>40,
		"kaprodi"=>"Rizalida"
		]

		 ];
	
?>

<h2><?php echo $mahasiswa [0];?></h2>
<h3><?php echo $prodi [1]["kaprodi"];?></h3>




	<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama prodi</th>
			<th>Nama kaprodi</th>
		</tr>
	</thead>

<?php foreach ($prodi as $prd) : ?>
	<tr>
		<td><?= $prd['id'];?></td>
		<td><?= $prd['nama'];?></td>
		<td><?= $prd['kaprodi'];?></td>
	</tr>
<?php endforeach; ?>
</body>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>