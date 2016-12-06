<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if(!is_numeric($id)){
	exit('Access Forbidden');
}

$siswa = new siswa();
$data = $siswa -> Deletesiswa($id);

if(empity($data)){
	echo"Data berhasil di delete";
}

?>
<br/>
<a href="siswa.php">Kembali</a>