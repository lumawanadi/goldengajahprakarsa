<?php
session_start();
include '../../core/koneksi.php';
include '../../core/aktif.php';
include '../../core/function.php';

$user  = isset($_SESSION['uname']) ? $_SESSION['uname']:'';
$level = isset($_SESSION['level']) ? $_SESSION['level']:'';

if($user){
	if($level=='1'){
				$dir='../../assets/img/por/';
		        $name=$_FILES['gambar']['name'];
		        $type=$_FILES['gambar']['type'];
		        $tmp=$_FILES['gambar']['tmp_name'];
		        $file=substr($name, strripos($name, "."));
		        $newname=date('dmyHis').$file;
		        $tgl = date('Y-m-d');

	            if(move_uploaded_file($tmp,$dir.$newname)){
					$i = Insert("porto", array(
							'idporto'	=>'',
							'des'		=>$_POST['nm'],
							'foto'		=>$newname,
							'ket'		=>$_POST['ket'],
						));
	                	Success("Upload Portofolio Complete !");
	                }  else {
	                    Error("Upload Portofolio Failed !");
	                }
	}else{
		echo'<script>location.href="'.$base_url.'"</script>';	
	}
}else{
	echo'<script>location.href="'.$base_url.'"</script>';
}
?>