<br>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<label>Setup Data Slide</label>
			</div>
			<div class="panel-body">
				<form id="smp-slide" action="<?php echo $base_url; ?>/app/datamaster/slideAct.php" method="POST">
					<div class="form-group">
						<label>Kata Motovasi</label>
						<input type="text" name="nm" class="inp form-control" autofocus="on" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" id="f-file" name="gambar" class="inp" required>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</form>
				<br>
				<div id="alert-slide"></div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="tmp-slide"></div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#tmp-slide').load('<?php echo $base_url; ?>/app/datamaster/slideView.php');
	$(document).ready(function(e){
        $('#smp-slide').submit(function(e){
            var url=$(this).attr('action');
            var formdata = new FormData();      
            var file = $('#f-file')[0].files[0];
             formdata.append('gambar', file);
             $.each($('#smp-slide').serializeArray(), function(a, b){
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
	                $('#alert-slide').html(data);
	                $('.inp').val("");
	                $('#tmp-slide').load('<?php echo $base_url; ?>/app/datamaster/slideView.php');
                }
             });
             return false;
        });
    });
</script>