<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';
$q = query("SELECT *FROM profile WHERE idprofile='$_GET[kd]'");
$data = row($q);
?>

<form id="edt-pr" action="<?php echo $base_url; ?>/app/datamaster/profileUpdate.php" method="POST">
				<input type="hidden" name="kd" value="<?php echo $data['idprofile']; ?>">
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" name="nm" class="inp form-control" autofocus="on" value="<?php echo $data['nama']; ?>" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea id="f-file" name="des" class="inp" required><?php echo $data['des']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</form>
<script>
	$('#edt-pr').submit(function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).mattr('action'),
			type:$(this).attr('method'),
			data: $(this).serialize(),
			success: function(html){
				alert("Data Berhasil Diupdate");
				location.href="<?php echo $base_url; ?>/Profile";
			}
		});
	});
</script>