<?php
session_start();
include '../../core/koneksi.php';
include '../../core/aktif.php';
include '../../core/function.php';

$user  = isset($_SESSION['uname']) ? $_SESSION['uname']:'';
$level = isset($_SESSION['level']) ? $_SESSION['level']:'';

if($user){
	if($level=='1'){
				$dir='../../assets/img/slide/';
		        $name=$_FILES['gambar']['name'];
		        $type=$_FILES['gambar']['type'];
		        $tmp=$_FILES['gambar']['tmp_name'];
		        $file=substr($name, strripos($name, "."));
		        $newname=date('dmyHis').$file;
		        $tgl = date('Y-m-d');

	            if(move_uploaded_file($tmp,$dir.$newname)){
					$i = Insert("slide", array(
							'idslide'	=>'',
							'judul'		=>$_POST['nm'],
							'foto'		=>$newname,
						));
	                	Success("Upload Slide Complete !");
	                }  else {
	                    Error("Upload Slide Failed !");
	                }
	}else{
		echo'<script>location.href="'.$base_url.'"</script>';	
	}
}else{
	echo'<script>location.href="'.$base_url.'"</script>';
}
?>