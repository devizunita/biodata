<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />	
	
	<title><?php echo $judul; ?></title>
</head>

<body style="background:#F7819F;">
	<center>
<div class="table" style="

	width: 400px;
	background: #F7819F;
	margin: 100px auto;
	padding: 20px 20px 50px 20px;
	border-radius: 10px;
	box-shadow: 0px 20px 20px 10px #DF013A;
">

<h2><?php echo $isi; ?></h2>
<?php echo form_open('pengurus/edit_submit');?>
<table border="0">
<?php foreach($data->result_array() as $row) { ?>
<tr>
	<td>ID</td>
	<td><input type="text" name="id" value="<?php echo $row['id']; ?>" readonly="yes"></td>
</tr>
<tr>
	<td>Nama</td>
	<td><?php echo form_input('nama',$row['nama']); ?></td>
</tr>

<tr>
	<td>Gender</td>
	<td><input type="radio" name="gender" value="L" <?php if (!(strcmp($row['gender'],"L"))) {echo "CHECKED";} ?>>Laki-laki<input type="radio" name="gender" value="P" <?php if (!(strcmp($row['gender'],"P"))) {echo "CHECKED";} ?>>Perempuan</td>
</tr>
<tr>
	<td>Alamat</td>
	<td><?php echo form_input('alamat',$row['alamat']); ?></td>
</tr>
<tr>
	<td>Gaji</td>
	<td><?php echo form_input('gaji',$row['gaji']); ?></td>
</tr>
<tr>
	<td></td>
	<td><?php echo form_submit('submit','ubah'); ?> <input type="button" value="Batal" onclick="self.history.back()"></td>
</tr>
<?php } ?>
</table>
<?php echo form_close();?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</center>
</body>
</html>

