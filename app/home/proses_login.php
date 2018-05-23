<?php
session_start();
include'../../core/koneksi.php';
include'../../core/aktif.php';
include'../../core/function.php';
$pass = md5($_POST['pass']);
$q = getData("user","*","uname='$_POST[user]' AND pass='$pass'");
$data = nums($q);
if($_POST['aksi']=='login'){
    if($data > 0){
        $get  = row($q);
        $_SESSION['uname'] = $get['uname'];
        $_SESSION['level'] = $get['level'];
        $_SESSION['nmuser'] = $get['nmuser'];
        $_SESSION['login'] = 1;
        echo '<script>document.location.href="'.$base_url.'"</script>';
    }else{
        echo'<div class="alert alert-danger"><strong><center>Failed Login !</strong> Username and Password Incorrect Please Try Again</center></div>';
    }
}else{
    Error("Anda Harus Login Terlebih Dahulu !");
}
?>