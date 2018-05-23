<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';

Update("profile","idprofile='$_POST[kd]'", array(
	'nama'	=>$_POST['nm'],
	'des'	=>$_POST['des'],
));
?>