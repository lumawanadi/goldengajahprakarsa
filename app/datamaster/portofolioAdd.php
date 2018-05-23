<br>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Setup Data Portofolio</label>
			</div>
			<div class="panel-body">
				<form id="smp-por" action="<?php echo $base_url; ?>/app/datamaster/portofolioAct.php" method="POST">
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="nm" class="inp form-control" autofocus="on" autocomplete="off" required></textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" id="f-file" name="gambar" class="inp" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<select name="ket" class="form-control" autocomplete="off">
							<option value="1">Coretan Emas</option>
							<option value="2">Urban Art</option>
							<option value="3">Anggi Art</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</form>
				<br>
				<div id="alert-por"></div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="tmp-por"></div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#tmp-por').load('<?php echo $base_url; ?>/app/datamaster/portofolioView.php');
	$(document).ready(function(e){
        $('#smp-por').submit(function(e){
            var url=$(this).attr('action');
            var formdata = new FormData();      
            var file = $('#f-file')[0].files[0];
             formdata.append('gambar', file);
             $.each($('#smp-por').serializeArray(), function(a, b){
               formdata.append(b.name, b.value);
             });
             $.ajax({
               url: url,
               data:formdata,
               processData: false,
               contentType: false,
               type: $(this).attr('method'),
               beforeSend: function(){
                 // add event or loading animation
               },
               success: function(data) {
	                $('#alert-por').html(data);
	                $('.inp').val("");
	                $('.alert').fadeOut(4000);
	                $('#tmp-por').load('<?php echo $base_url; ?>/app/datamaster/portofolioView.php');
                }
             });
             return false;
        });
    });
</script>