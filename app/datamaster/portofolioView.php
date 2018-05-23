<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';
$q = getAll("porto");
?>
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>des</th>
		<th>Gambar</th>
		<th>Ket</th>
		<th></th>
	</tr>
	<?php
	$no = 1;
	while ($data = row($q)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['des']; ?></td>
		<td>
			<a href="<?php echo $base_url.'/assets/img/por/'.$data['foto']; ?>" target="_blank">
				<img src="<?php echo $base_url.'/assets/img/por/'.$data['foto']; ?>" style="width: 30%; height: 30px;">
			</a>
		</td>
		<td><?php 
			if($data['ket']=='1'){
				echo'<div class="label label-primary">Coretan Emas</div>';
			}elseif($data['ket']=='2'){
				echo'<div class="label label-success">Urban Art</div>';
			}else{
				echo'<div class="label label-default">Anggi Art</div>';
			}
		?></td>
		<td><a href="<?php echo $base_url; ?>/app/datamaster/portofolioHapus.php?kd=<?php echo $data['idslide']; ?>" class="hapus btn btn-danger"> Hapus</a></td>
	</tr>
	<?php
	}
	?>
</table>
<script>
	$('.hapus').on('click', function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			type:'GET',
			data: $(this).serialize(),
			success: function(html){
				$('#tmp-por').load('<?php echo $base_url; ?>/app/datamaster/portofolioView.php');
			}
		});
	});
</script>