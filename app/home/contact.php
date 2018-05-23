<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3LgjaRf21AMTpnhd-cwJHsmQawhMdu6g&callback=initMap"
  type="text/javascript"></script>  
<script type="text/javascript">
var peta;
function peta_awal(){
    // definisikan koordinat awal untuk peta
        var awal = new google.maps.LatLng(1.1478527,104.0120691); 
       // peta option, berupa setting bagaimana peta itu akan muncul
       var petaoption = {zoom: 16,center: awal,mapTypeId: google.maps.MapTypeId.ROADMAP}; 
      // menuliskan koordinat peta dan memunculkannya ke halaman web
      peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
      // marker 
      tanda = new google.maps.Marker({position: awal, map: peta });}
</script>

<section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <form action="#" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit Form">
              </div>
            </form>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            
            
            <h4>Batam City</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span>KOMPLEK PERTOKOAN NAGOYA GARDEN BLOK D NO. 12,13 & 14 NAGOYA – BATAM - INDONESIA </span></li>
              <li><i class="icon-email"></i><span>gajah_prakarsa@yahoo.com</span></li>
              <li><i class="icon-phone"></i><span>+62 – 778 – 433575</span></li>
            </ul>

            <h4>Maps</h4>
            <div id="map_canvas" style="width:100%; height:400px" ></div>
            
          </div>
        </div>
      </div>
    </section>   