<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';
$q = getAll("slide");
?>
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Gambar</th>
		<th></th>
	</tr>
	<?php
	$no = 1;
	while ($data = row($q)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><img src="<?php echo $base_url.'/assets/img/slide/'.$data['foto']; ?>" style="width: 20%; height: 30px;">.</td>
		<td><a href="<?php echo $base_url; ?>/app/datamaster/slideHapus.php?kd=<?php echo $data['idslide']; ?>" class="hapus btn btn-danger"> Hapus</a></td>
	</tr>
	<?php
	}
	?>
</table>
<script>
	$('.hapus').on('click', function(e){
		e.preventDefault();
		if(confirm("Data Akan Dihapus?")){
			$.ajax({
				url: $(this).attr('href'),
				type:'GET',
				data: $(this).serialize(),
				success: function(html){
					$('#tmp-slide').load("<?php echo $base_url; ?>/app/datamaster/slideView.php");
				}
			});
		}
	});
</script>