<?php
include '../../core/koneksi.php';
include '../../core/aktif.php';
$q = getAll("profile");
?>
<table class="table table-bordered table-hover">
	<tr>
		<th>No</th>
		<th>Nama Perusahaan</th>
		<th>Deskripsi</th>
		<th></th>
	</tr>
	<?php
	$no = 1;
	while ($data = row($q)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['des']; ?></td>
		<td><a href="<?php echo $base_url; ?>/app/datamaster/profileEdit.php?kd=<?php echo $data['idprofile']; ?>" class="edit btn btn-sm btn-warning"> Edit</a>
			<a href="<?php echo $base_url; ?>/app/datamaster/profileHapus.php?kd=<?php echo $data['idprofile']; ?>" class="hapus btn btn-sm btn-danger"> Hapus</a></td>
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
					$('#tmp-por').load('<?php echo $base_url; ?>/app/datamaster/portofolioView.php');
				}
			});
		}
	});
	$('.edit').on('click', function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			type:'GET',
			data: $(this).serialize(),
			success: function(html){
				$('#profil').html(html);
			}
		});
	});
</script>