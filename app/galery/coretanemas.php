<?php
include './core/aktif.php';
?>

<section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row mb40">
          <div class="col-md-6 col-md-push-6 probootstrap-animate">
            <h2>Description</h2>
            <p>Halaman ini memuat Portofolio dari Coretan Emas Architect, dimana halaman ini membuat seluruh karya dari Coretan Emas Architect.</p>
          </div>
        </div>
        <!-- END row -->
        <?php
          	$q = query("SELECT *FROM porto WHERE ket='1'");
          	while ($data = row($q)) {
        ?>
          <div class="col-md-6 probootstrap-animate">
          	
            <a href="<?php echo $base_url.'/assets/img/por/'.$data['foto']; ?>" target="_blank">
            	<img src="<?php echo $base_url.'/assets/img/por/'.$data['foto']; ?>" class="img-responsive">
            </a>
          	<hr>
            <p align="justify"><?php echo $data['des']; ?>.</p>
            
       	  </div>
        <?php
        }
        ?>
      </div>
</section>