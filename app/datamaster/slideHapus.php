<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';

Delete("slide","idslide='$_GET[kd]'");
?>