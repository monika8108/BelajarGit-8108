<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST[kirim])){
	exit('Access Forbiden');
}

$siswa = new Siswa();


if(!copy($_FILES['in_foto']['tmp_name'], 'img/' .$_POST['in_nis'].'.png')){
	exit ('Error Upload File');

$data['input_name'] = $_POST ['in_name'];
$data['input_email'] = $_POST ['in_email'];
$data['input_nationality'] = $_POST [in_nationality];
$data['foto'] = "";


echo "Data siswa Berhasil di upload <br /?>";
	echo "<a href='usiswa.php?a=".$_POST['in_nis']."'> Detail Siswa </a>";
?>