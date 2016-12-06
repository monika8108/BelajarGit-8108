<?php

require_once ('lib/DBClass.php');
require_once ('lib/m_siswa.php');

$id = $_GET ['a'];
if (!is_numeric($id)){
		exit('ACces Forbiden')
		
	}
$siswa = new ();
$data = $siswa -> Deletesiswa ($id);

if (empty($data)){
	echo"Data berhasil didelete";
}

?>
	 