<?php
$pengaturan = $this->m_setting->detail_web();
?>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer text-center">
  <strong>Copyright &copy; 2020-<?php echo date('Y') ?> <a href=""><?php echo $pengaturan->nama_sekolah ?></a></strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>


<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>



<!-- preview foto -->
<script>
  $("#inputFile").change(function(event) {
    fadeInAdd();
    getURL(this);
  });

  $("#inputFile").on('click', function(event) {
    fadeInAdd();
  });

  function getURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      var filename = $("#inputFile").val();
      filename = filename.substring(filename.lastIndexOf('\\') + 1);
      reader.onload = function(e) {
        debugger;
        $('#imgView').attr('src', e.target.result);
        $('#imgView').hide();
        $('#imgView').fadeIn(500);
        $('.custom-file-label').text(filename);
      }
      reader.readAsDataURL(input.files[0]);
    }
    $(".alert").removeClass("loadAnimate").hide();
  }

  function fadeInAdd() {
    fadeInAlert();
  }

  function fadeInAlert(text) {
    $(".alert").text(text).addClass("loadAnimate");
  }
</script>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });

  }, 3000);
</script>
<!-- <script type="text/javascript">
  // 1 detik = 1000
  window.setTimeout("waktu()",1000);  
  function waktu() {   
  var tanggal = new Date();  
  setTimeout("waktu()",1000);  
  document.getElementById("jam").innerHTML = tanggal.getDate()+"-"+tanggal.getMonth()+"-"+tanggal.getFullYear()+" / "+tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
  }
</script> -->
<!-- <script>
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (("0"+dt.getDate()).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()+1).slice(-2)) +":"+ (("0"+dt.getMinutes()+1).slice(-2));
</script> -->
<script>
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
    else(a = tw.getTime());
    tw.setTime(a);
    var bulan = tw.getMonth();
    var bulanarray = new Array("Jan", "Feb", "Mar", "Apr", "Mey", "Jun", "Jul", "Aug", "Sep", "Oct", "Nop", "Dec");
    setTimeout("waktu()", 1000);
    document.getElementById("tanggalwaktu").innerHTML = tw.getDate() + "-" + bulanarray[bulan] + "-" + tw.getFullYear() + " / " + tw.getHours() + ":" + tw.getMinutes() + ":" + tw.getSeconds();
  }
</script>

<!-- ckeditor -->
<script>
  initSample();
</script>


</body>

</html>