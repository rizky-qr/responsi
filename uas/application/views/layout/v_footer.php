</div>
<?php
$pengaturan = $this->m_setting->detail_web();
?>
<!-- Footer -->
<footer class="footer" style="margin-top: 200px;">
  <div class="footer_background" style="background-image:url(<?php echo base_url() ?>assets/foto/footer_background.png)"></div>
  <div class="container">
    <div class="row footer_row">
      <div class="col">
        <div class="footer_content">
          <div class="row">

            <div class="col-lg-4 footer_col">

              <!-- Footer About -->
              <div class="footer_section footer_about text-center">
                <div class="footer_logo_container">
                  <a href="#">
                    <div class="footer_logo_text"><?= $pengaturan->nama_sekolah ?></div>
                  </a>
                </div>
                <div class="footer_about_text">
                  <p><?= $pengaturan->visi ?> </p>
                </div>
                <div class="footer_social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCfUqe41ITUNtK6ZMmjzJVrw"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-4 footer_col  text-center">

              <!-- Footer Contact -->
              <div class="footer_section footer_contact">
                <div class="footer_title">Kontak</div>
                <div class="footer_contact_info">
                  <ul>
                    <li>Email : <?= $pengaturan->email ?> </li>
                    <li>No Telepon : <?= $pengaturan->no_telp ?> </li>
                    <li>Alamat : <?= $pengaturan->alamat ?> </li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-4 footer_col  text-center">

              <!-- Footer links -->
              <div class="footer_section footer_links">
                <div class="footer_title">Link</div>
                <div class="footer_links_container">
                  <ul>
                    <li><a href="<?php echo base_url('') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('id/profil') ?>">Visi Misi</a></li>
                    <li><a href="<?php echo base_url('id/guru') ?>">Guru</a></li>
                    <li><a href="<?php echo base_url('id/video') ?>">Video</a></li>
                    <li><a href="<?php echo base_url('id/pengumuman') ?>">Pengumuman</a></li>
                    <li><a href="<?php echo base_url('id/download') ?>">download</a></li>
                    <li><a href="<?php echo base_url('id/gallery') ?>">Gallery</a></li>
                    <li><a href="<?php echo base_url('id/kontak') ?>">kontak</a></li>
                  </ul>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row copyright_row">
      <div class="col">
        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-center">
          <div class="cr_text ">
            Copyright &copy; 2020-<?php echo date('Y') ?> <a href=""><?php echo $pengaturan->nama_sekolah ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>



<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url() ?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/easing/easing.js"></script>
<script src="<?php echo base_url() ?>assets/plugin/parallax-js-master/parallax.min.js"></script>

<script src="<?php echo base_url() ?>assets/plugin/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url() ?>assets/lightbox/lightbox.js"></script>


<script src="<?php echo base_url() ?>assets/plugin/masonry/masonry.js"></script>
<script src="<?php echo base_url() ?>assets/js/blog.js"></script>

<script src="<?php echo base_url() ?>assets/js/about.js"></script>

<script src="<?php echo base_url() ?>assets/js/custom.js"></script>




<script>
  $(function() {
    $('#nav1 a').filter(function() {
      return this.href == location.href
    }).parent().addClass('active').siblings().removeClass('active')
    // $('#nav1 a').click(function(){
    //  $(this).parent().addClass('active').siblings().removeClass('active')    
    // })
  })
</script>

<!-- back to top -->
<script type="text/javascript">
  var $backToTop = $(".backTop");
  // $backToTop.hide();
  // $(window).on('scroll', function() {
  //   if ($(this).scrollTop() > 100) {
  //     $backToTop.fadeIn();
  //   } else {
  //     $backToTop.fadeOut();
  //   }
  // });

  $backToTop.on('click', function(e) {
    $("html, body").animate({
      scrollTop: 0
    }, 500);
  });
</script>

<!-- jam -->
<script type="text/javascript">
  // 1 detik = 1000
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var tanggal = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal.getSeconds();
  }
</script>

</body>

</html>