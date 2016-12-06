<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET{'id'};

if(!is_numeric($id)){
	exit('Access Forbiden');
}
$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$dt = $data[0];

?>

<h1> Edit data siswa </h1>
<form action="tsiswa.php" method="POST">
	NIS:<br />
	<input type="text" name="in_nis"><br />
	Nama Lengkap:<br />
	<input type="text" name="in_nama"><br />
	Email:<br />
	<input type="text" name="in_email"><br />
	Kewarganegaraan <br />
	<select name="in_nation">
		<option value="">--pilih negara--</option>
		<?php 
			foreach($data_nation as $n): 
		?>
		<option value="<?php echo $n['id_nationality'] ?>">
		<?php 
			echo $n['nationality'] 
		?>	
		</option>
		<?php 
			endforeach
		?> 
	</select><br />
	<input type="submit" name="kirim" value="simpan">
</form>