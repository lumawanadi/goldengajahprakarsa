<?php

function btnSave(){
    echo'<button type="submit" class="btn btn-info">Simpan</button>';
}
function btnReset(){
    echo'<button type="reset" class="btn btn-danger">Reset</button>';
}
function Success($pesan){
	echo '<div class="alert alert-success">
            <button data-dismiss="alert" class="close">&times;</button>
            <i class="icon fa fa-check"></i> 
            <strong>Succes !</strong> '.$pesan.' 
	</div>';
}
function Error($pesan){
	echo'<div class="alert alert-danger">
            <button data-dismiss="alert" class="close">&times;</button>
            <i class="icon fa fa-ban"></i> 
            <strong>Error !</strong> '.$pesan.' 
	</div>';
}
?>