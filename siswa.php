<?php
ini_set ("display_errors",0);
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/Age.php');

$siswa = new Siswa();
$age = new Age();
$data = $siswa->readAllSiswa();

?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>Date Of Birth</th>
		<th>Age</th>
		<th>NATIONALITY</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($data as $a) :?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['date_ob']?></td>
		<td>
			<?php
				$tanggal = $a['date_ob'];
				$exec = $age->age($tanggal);
				echo $exec->y."tahun ".$exec->m." Bulan ".$exec->d."hari";
			?>
		</td>
		<td><?php echo $a['nationality']?></td>		
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail</a></td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa']?>">Edit</a></td>
	</tr>
	<?php endforeach?>
</table>