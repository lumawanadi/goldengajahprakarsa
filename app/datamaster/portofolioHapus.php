<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';

Delete("porto","idporto='$_GET[kd]'");
?>