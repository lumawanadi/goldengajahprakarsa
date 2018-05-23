<?php
global $base_url;
global $url_page;
global $url_data;
global $url_hal;
global $url_lain;

$sql = array(
	'user'	=> 'root',
	'pass'	=> '',
	'db'	=> 'coretan',
	'host'	=> 'localhost'
);

$con = mysql_connect($sql['host'],$sql['user'],$sql['pass']);
$db = mysql_select_db($sql['db']);

$base_url = "http://localhost/coretanemas";
$link = preg_replace('./[^A-Za-z0-9\/].', '',$_SERVER['REQUEST_URI']);
$url = (explode('/', $link));

$url_page = isset($url[2]) ? $url[2] : '';
$url_data = isset($url[3]) ? $url[3] : '';
$url_hal = isset($url[4]) ? $url[4] : '';
$url_lain = isset($url[5]) ? $url[5] : '';
$url_plus = isset($url[6]) ? $url[6] : '';
$url_akhir = isset($url[7]) ? $url[7] : '';
$url_tambah = isset($url[8]) ? $url[8] : '';
?>