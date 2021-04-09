<div class="container p-5 mt-5">

  <div class="section-title">
    <h1 class="text-center pb-5 pt-5">Kontak<span class="title-under"></span></h1>
  </div>

  <div class="row d-flex justify-content-around">

    <div class="col-lg-5 card p-5">
      <div class="info">
        <div class="address row ">
          <div class="footer_social col-2">
            <ul>
              <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="mt-4 col-10">
            <h4>Alamat :</h4>
            <p><?= $kontak->alamat ?></p>
          </div>
        </div>
        <div class="email row">
          <div class="footer_social col-2">
            <ul>
              <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="mt-4 col-10">
            <h4>Email:</h4>
            <span><?= $kontak->email ?></span>
          </div>
        </div>
        <div class="phone row">
          <div class="footer_social col-2">
            <ul>
              <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="mt-4 col-10">
            <h4>No Telepon:</h4>
            <p><?= $kontak->no_telp ?></p>
          </div>
        </div>
        <br>
        <br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3373.7486465968514!2d118.45290951433695!3d-8.715964491262717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dca629a797e75a5%3A0xddeb74f821a40251!2sSMA%20N%201%20HU&#39;U!5e1!3m2!1sid!2sid!4v1609429267131!5m2!1sid!2sid" style="border:0; width: 100%; height: 290px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

    </div>

    <div class="col-lg-6 card p-5 ">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          </div>
          <div class="form-group col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
          </div>
        </div>
        <div class="form-group">
          <label for="name">judul</label>
          <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        </div>
        <div class="form-group">
          <label for="name">Pesan</label>
          <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
        </div>
        <div class="text-center"><button class="btn btn-primary " type="submit">Send Message</button></div>
      </form>
    </div>

  </div>

</div>