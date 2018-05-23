
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <script src="<?php echo $base_url; ?>/assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/styles-merged.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.min.css">
  </head>
  <body onload="peta_awal()">
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $base_url; ?>">Home</a></li>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Gallery</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo $base_url; ?>/GalCoretanEmas">Coretan Emas Art</a></li>
                    <li><a href="<?php echo $base_url; ?>/GalUrban">Urban Art</a></li>
                    <li><a href="<?php echo $base_url; ?>/GalAnggi">Anggi Art</a></li>
                  </ul>
                </li>
            <li><a href="<?php echo $base_url; ?>/About">About</a></li>

            <li><a href="<?php echo $base_url; ?>/Contact">Contact</a></li>

            <?php
            if(isset($_SESSION['uname'])){
              if($_SESSION['level']=='1'){
                ?>
                <li class="dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle">Setup</a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo $base_url; ?>/Slide">Slide</a></li>
                    <li><a href="<?php echo $base_url; ?>/Portofolio">Portfolio</a></li>
                    <li><a href="<?php echo $base_url; ?>/Profile">Profile</a></li>
                  </ul>
                </li>
                <?php
              }else{

              }
            }else{
              
            }
            ?>

            <?php
            if(isset($_SESSION['uname'])){
              ?>
              <li><a href="<?php echo $base_url; ?>/app/home/logout.php">Logout</a></li>
              <?php
            }else{
              ?>
              <li><a href="<?php echo $base_url; ?>/Login">Login</a></li>
              <?php
            }
            ?>  
            

          </ul>
        </div>
      </div>
    </nav>
<?php
$q = mysql_query("SELECT *FROM slide ORDER BY idslide DESC LIMIT 3");
?>
<section class="flexslider">
      <ul class="slides">
        <?php
        while ($x = mysql_fetch_array($q)){
        ?>
        <li style="background-image: url(<?php echo $base_url.'/assets/img/slide/'.$x['foto']; ?>" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate"><?php echo $x['judul']; ?></h1>
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php
        }
        ?>
      </ul>
    </section>











