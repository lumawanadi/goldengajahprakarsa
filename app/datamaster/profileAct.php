<?php
session_start();
include '../../core/koneksi.php';
include '../../core/aktif.php';
include '../../core/function.php';

$user  = isset($_SESSION['uname']) ? $_SESSION['uname']:'';
$level = isset($_SESSION['level']) ? $_SESSION['level']:'';

if($user){
	if($level=='1'){
		$q = query("SELECT *FROM profile WHERE nama='$_POST[nm]'");
		$cek = nums($q);
		if($cek > 0){
			Error("Data Sudah Ada !");
		}else{
			$i = Insert("profile", array(
							'idprofile'	=>'',
							'nama'		=>$_POST['nm'],
							'des'		=>$_POST['des'],
						));
	            if($i){
	                	Success("Profile Setup Complete !");
	                }  else {
	                    Error("Profile Setup Failed !");
	                }
		}
	}else{
		echo'<script>location.href="'.$base_url.'"</script>';	
	}
}else{
	echo'<script>location.href="'.$base_url.'"</script>';
}
?>