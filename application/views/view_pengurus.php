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

<?php echo form_open('pengurus/addpengurus');?>
<table border="0" align="center">
	<h1 >Edit Data Pengurus</h1>
	<tr>
		<td>ID</td>
		<td><?php echo form_input('id'); ?></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><?php echo form_input('nama'); ?></td>
	</tr>
	<tr>
		<td>GENDER</td>
		<td><input type="radio" name="gender" value="L">Laki-laki<input type="radio" name="gender" value="P">PEREMPUAN</td>
	</tr>
	<tr>
		<td>ALAMAT</td>
		<td><?php echo form_input('alamat'); ?></td>
	</tr>
	<tr>
		<td>GAJI</td><td> <?php echo form_input('gaji'); ?> </td>
	</tr>
	<tr align="center">
	<td><button type="submit" class="btn btn-outline-primary" ><i class="material-icons ">turned_in_not</i>Save</button></td>
	<td><button type="reset" class="btn btn-outline-danger"><i class="material-icons ">delete</i>Batal</button>
	</td>
	</tr>
</table>

<?php echo form_close();?>

</div>
</center>
</body>



<body style="background:#F7819F;">
	<center>
<div class="table" style="
	width: 600px;
	background:#F2F2F2;
	margin: 10px auto;
	padding: 20px 20px 50px 20px;
	border-radius: 10px;
	box-shadow: 0px 20px 20px 10px #DF013A;
">




<table border="1">
	<h1>Data Pengurus</h1>

	<tr style="background: #B40431">
		<th >ID</th>
		<th>NAMA</th>
		<th>GENDER</th>
		<th >ALAMAT</th>
		<th>GAJI</th>
		<th>AKSI</th>
	</tr>

<?php
foreach($data->result_array() as $row) { //mengambil data dari controller 
			?>

	<tr>
		<td ><?php echo $row['id'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['alamat'];?></td>
		<td><?php echo $row['gaji'];?></td>
		<td>
			<?php echo  anchor('pengurus/edit/'.$row['id'],'Edit')?>
			<?php echo  anchor('pengurus/delete/'.$row['id'],'Hapus')?>
		</td>
	</tr>
<?php }?>
	
</table>


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</center>
</body>
</html>


