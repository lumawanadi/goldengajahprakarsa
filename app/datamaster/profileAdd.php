<br>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Profil Perusahaan</label>
			</div>
			<div class="panel-body">
				<div id="profil">
				<form id="smp-pr" action="<?php echo $base_url; ?>/app/datamaster/profileAct.php" method="POST">
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" name="nm" class="inp form-control" autofocus="on" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="des" class="inp form-control" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</form>
				</div>
				<br>
				<div id="alert-pr"></div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="tmp-pr"></div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#tmp-pr').load('<?php echo $base_url; ?>/app/datamaster/profileView.php');
	$('#smp-pr').submit(function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			type:$(this).attr('method'),
			data : $(this).serialize(),
			success: function(html){
				$('#alert-pr').html(html)
				$('#tmp-pr').load('<?php echo $base_url; ?>/app/datamaster/profileView.php');
				$('.inp').val("");
			}
		});
	});
</script>