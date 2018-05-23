<?php
session_start();
session_destroy();
include '../../core/koneksi.php';
echo '<script>location.href="'.$base_url.'"</script>';
?>