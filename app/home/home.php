    <?php
    include './core/aktif.php';
    $q = query("SELECT *FROM profile WHERE idprofile='1'");
    $data = row($q);
    ?>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <h2 class="mb0">Welcome To Our Website</h2>
            <p class="lead mt0"><?php echo $data['nama']; ?></p>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <p align="justify"><?php echo $data['des']; ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>What We Offer</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-6">
            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="<?php echo $base_url; ?>/assets/img/con.jpg" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3>Decor Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              </div>
            </div>

            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="<?php echo $base_url; ?>/assets/img/con.jpg" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3>Residential Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6">
            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="<?php echo $base_url; ?>/assets/img/con.jpg" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3>Interior Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              </div>
            </div>

            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="<?php echo $base_url; ?>/assets/img/con.jpg" alt="Free Bootstrap Template by uicookies.com">
                </div>
              </div>
              <div class="text">
                <h3>Commercial Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>    
    
    <section class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Our Subs Company</h2>
            <p class="lead">Golden Gajah Prakarsa memiliki anak perusahaan dalam bidang seni dan art, diantaranya :</p>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-4 col-sm-8 col-xs-8 text-center client-logo probootstrap-animate">
            <center>
            <img src="<?php echo $base_url; ?>/assets/img/logo/urban.jpg" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
            </center>
          </div>
          <div class="col-md-4 col-sm-8 col-xs-8 text-center client-logo probootstrap-animate">
            <center>
            <img src="<?php echo $base_url; ?>/assets/img/logo/coret.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
            </center>
          </div>
          <div class="col-md-4 col-sm-8 col-xs-8 text-center client-logo probootstrap-animate">
            <center>
            <img src="<?php echo $base_url; ?>/assets/img/client_4.png" class="img-responsive" alt="Free Bootstrap Template by uicookies.com">
            </center>
          </div>          
          
        </div>
      </div>
    </section>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Why Choose Us</h2>
            <p class="lead">here are the reasons why choose us</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-mobile3"></i></div>
              <div class="text">
                <h3>Creativity and Technology</h3>
                <p>we combine creativity and technology, with our ideas that we pour into a technology to produce a work of high artistic value.</p>
              </div>  
            </div>
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-presentation"></i></div>
              <div class="text">
                <h3>Always Improve Progress</h3>
                <p>in all things we are always driven to progress, for that we always pay attention to every progress that is on our work.</p>
              </div>
            </div>
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-circle-compass"></i></div>
              <div class="text">
                <h3>Contribution to Culture</h3>
                <p>Bangunan merupakan salah satu penanda budaya dan peradaban dalam sejarah. Untuk itu, arsitek memiliki kesempatan untuk menorehkan sejarah melalui karya-karya terbangunnya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-lightbulb"></i></div>
              <div class="text">
                <h3>A form of impingement on Creativity and Science</h3>
                <p>Venting creativity as well as knowledge owned can also be one reason for someone to choose the profession as an architect. Creativity in the world of architecture can be associated with the ability of an architect to process raw building materials.</p>
              </div>  
            </div>
            
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-magnifying-glass2"></i></div>
              <div class="text">
                <h3>Look for a New Concept</h3>
                <p>always looking for new things that make us rich in creativity and innovation.</p>
              </div>
            </div>
            
            <div class="service left-icon probootstrap-animate">
              <div class="icon"><i class="icon-browser2"></i></div>
              <div class="text">
                <h3>Registered and Recognized</h3>
                <p>we are officially registered with a legal entity that is clear and reliable, we also have certification from IAI (bond architect Indonesia).</p>
              </div>
            </div>

          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section probootstrap-border-top probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2>Testimonial</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
              <div class="item">

                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="<?php echo $base_url; ?>/assets/img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author">&mdash; Ferdinand A. Porsche <br> <span>Design Lead at AirBNB</span></cite></blockquote>
                </div>

              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="<?php echo $base_url; ?>/assets/img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author">&mdash; Steve Jobs <br> <span>Co-Founder Square</span></cite></blockquote>
                </div>
              </div>
              <div class="item">
                <div class="probootstrap-testimony-wrap text-center">
                  <figure>
                    <img src="<?php echo $base_url; ?>/assets/img/person_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                  </figure>
                  <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; Frank Chimero <br> <span>Creative Director at Twitter</span></cite></blockquote>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    
 
