<!DOCTYPE html>
<html>
<head>
<title> Judul Halaman</title>
</head>
<body>
<h1> Judul Paragraf</h1>
<?php
$angka = 3;
$angka = "enam";
$subjudul ="ini adalah sub judul";
var_dump($angka);  //untuk menampilkan tipe data dan isinya
$logika = true;
$logika_dua = false;

$hasil =var_dump ($logika || $logika_dua);
echo $hasil;

if ($logika&&logika_dua){
	echo $hasil;
	

}


?>
<p> belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,vbelajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu.</p>
<h2><?= $subjudul ?></h2>
<p>
belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu,belajar pemograman web 2 pada hari rabu.<?php echo $angka ?></p>

</body>
</html>