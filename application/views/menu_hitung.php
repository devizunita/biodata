<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title><?php echo $judul; ?></title>
</head>
<body style="background:#FBEFFB;">
	<center>
<div class="table" style="
	width: 500px;
	background:#F6CED8;
	margin: 200px auto;
	padding: 20px 20px 50px 20px;
	border-radius: 10px;
	box-shadow: 0px 10px 20px 0px #2E2E2E;
">
<h1>Silahkan pilih menu dibawah ini.</h1>

<ul>
	<li><?php echo anchor('hitung/perkalian','perkalian');?></li>
	<li><?php echo anchor('hitung/pembagian','pembagian');?></li>
</ul>



	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</center>
</body>
</html>