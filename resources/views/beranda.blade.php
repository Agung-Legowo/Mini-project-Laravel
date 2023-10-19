<!DOCTYPE html>
<html>
<head>
	<title>Website Sekolah</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<!--navbar-->

  <div class="text-center">
  <nav class="navbar navbar-expand bg-dark">
    <ul class="nav">
      <a class="navbar-brand" href="#">
          <img src="gbr/logo.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
          Smp Hafizh Islamic
        </a>
      <li>
        <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
      </li>
      <li>
        <a class="nav-link" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
      </li>
      <li>
        <a class="nav-link" href="{{ url('/info-kegiatan') }}">Info Kegiatan</a>
      </li>
    </ul>
  </nav>
  </div>

	
	<!--end navbar-->

	<!--Carosal-->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gbr/1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SMP HAFIZH ISLAMIC</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gbr/11.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SMP HAFIZH ISLAMIC</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gbr/12.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SMP HAFIZH ISLAMIC</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	<!--end Crosal-->

	<!--about-->
	 <h3 class="mt-5 text-center about" id="about">ABOUT US</h3>
        <hr>

        <div class="bg-light">
          <div class="container text-justify p-5">
            <div class="row">
              <div class="col-md-6">
               Smp Hafizh Islamic adalah sekolah swasta menengah pertama  yang terletak di jakarta selatan yang merupkan sekolah yang berdedikasi tinggi dalam pendidikan smp Hafizh Islamic memiliki Akredetasi B (Baik) memiliki fasilitas yang lengkap dan memadai dengan memiliki 14 rombongan kelas dan memiliki kegiatan siswa yang dapat memnunjung bakat dan prestasi perserta didik yang dalam bermanfaat kedepannya!
              </div>
              <div class="col-md-6">
                Smp Hafizh Islamic sangat berkomitmen dalam hal meningkatkan keimanan, pemahaman, penghayatan, dan pengamalan peserta didik tentang agama Islam, sehingga menjadi manusia muslim yang beriman dan bertakwa kepada Allah swt. Serta berakhlak mulia dalam kehidupan pribadi, bermasyarakat, berbangsa dan bernegara!.
              </div>
            </div>
          </div>
        </div>
	<!--end about-->

	<!--kegiatan osis-->
	<h3 class="mt-5 text-center portofolio" id="portofolio">KEGIATAAN SEKOLAH</h3>
        <hr>

        <div class="container">
          <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="">
                  <img src="gbr/2.png" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/3.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/4.jpg" class="img-thumbnail">
                </a>
            </div>
          </div>
        </div>
	<!--end osis-->

	<!--kegiatan extrakurikuler-->
	<h3 class="mt-5 text-center portofolio" id="portofolio">KEGIATAAN EXTRAKURIKULER</h3>
        <hr>

        <div class="container">
          <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="">
                  <img src="gbr/5.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/6.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/7.jpg" class="img-thumbnail">
                </a>
            </div>
          </div>
        </div>
	<!--end extrakurikuler-->

	<!--kegiatan Perlombaan-->
	<h3 class="mt-5 text-center portofolio" id="portofolio">PERLOMBAAN</h3>
        <hr>

        <div class="container">
          <div class="row text-center mt-5">
            <div class="col-md-4">
                <a href="">
                  <img src="gbr/8.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/9.jpg" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-4">
              <a href="">
                  <img src="gbr/10.jpg" class="img-thumbnail">
                </a>
            </div>
          </div>
        </div>
	<!--end perlombaan-->

  <!--Testimonials-->
  <h3 class="mt-5 mb-5 text-center contact" id="contact">TESTIMONIALS</h3>
        <hr>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial pt-4 pb-4">
              <div class="container">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                      <img src="gbr/13.jpeg" class="rounded-circle" width="87%">
                    </div>
                    <div class="col-md-7 text-justify font-italic">
                      <h4>KH SAMSUL MA'RIF <small>-KETUA PWNU JAKARTA-</small></h4>
                       "saya sangat menyarankan smp hafiz islamic karena sekolah ini meruapakan sekolah islam terbaik, dari segi kurikulum, kegiatan sekolah dan fasilitas yang sangat lengkap dan memadai".
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial pt-4 pb-4">
              <div class="container">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                      <img src="gbr/14.jpg" class="rounded-circle" width="87%">
                    </div>
                    <div class="col-md-7 text-justify font-italic">
                      <h4>USTADZ ABDUL SOMAD LC, MA <small>-PENDAKWA-</small></h4>
                      "Di era industri 4.0 ini, handphone adalah benda yang sangat paling banyak dimilki oleh masyarakat ini sangat lah menguntungkan bisnis saya karena sangatlah mudah untuk dikases dimana saja, dengan memiliki aplikasi berbasis mobile bisnis saya akan semakin banyak disukai oleh masyarakat."
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial pt-4 pb-4">
              <div class="container">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                      <img src="gbr/15.jpg" class="rounded-circle" width="87%">
                    </div>
                    <div class="col-md-7 text-justify font-italic">
                      <h4>ANIS BASWEDAN<small>GUBERNUR JAKARTA</small></h4>
                        "Dengan Adanya IT CONSULTAN di PT JAYA TEKNOLOGI yang sangat berpengalaman dan profesional  usaha umkm saya sangat lah maju,penjualan semakin meningkat penjualan  tidak hanya dalam negri tapi jugak luar negri ini sangatlah bagus untuk usaha umkm saya.
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              
            </div>
            <div class="carousel-item">
              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

  <!--end testimonials-->

  <!-- Fitur Kirim Email -->

    <h3 class="mt-5 mb-5 text-center contact" id="contact">CONTACT US</h3>
         <hr>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
            <h3>Tinggalkan Balasan</h3>
            <form method="post" action="/kirim">
              @csrf
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" type="text" name="nama">
              </div>
              <div class="form-group">
                <label>Website</label>
                <input class="form-control" type="text" name="website">
              </div>
              <div class="form-group">
                      <label>Komentar</label>
                <textarea class="form-control" name="komentar" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label>Alamat Email Saya</label>
                <input class="form-control" type="text" name="email">
              </div>
              <div class="text-right">
                <br>
                <button type="submit" class="btn btn-primary">Kirim ke Email Saya</button>
              </div>
               <div class="col-md-3">  
            </form>
              </div>
            </div>

                <div class="col-md-3">
              <img src="gbr/guru.png" width="500px">
            </div>
          </div>
        </div>


        </div>
          </div>
            <br>
  <!-- End Fitur Kirim Email -->  

  <!--footer-->
  <footer class="mt-5 bg-dark">
          <div class="container">
            <div class="row text-white p-4 text-justify">
              <div class="col-md-4">
              Smp Hafizh Islamic sangat berkomitmen dalam hal meningkatkan keimanan, pemahaman, penghayatan, dan pengamalan peserta didik tentang agama Islam, sehingga menjadi manusia muslim yang beriman dan bertakwa kepada Allah swt. Serta berakhlak mulia dalam kehidupan pribadi, bermasyarakat, berbangsa dan bernegara!.<br><br>
              </div>
              <div class="col-md-4">
              Kami akan terus berdedikasi dalam hal pendidikan yang lebih baik untuk mewujudkan generasi yang cermelang
                kontak
                0896-2043-1667
                smphafizislamic@gmail.com

                Alamat
                Jakarta Utara no 128 
              </div>
              
              <div class="col-md-4">
                <strong>Hubungi Kami</strong>
                <input type="text" name="" class="form-control rounded-pill mt-3" placeholder="masukan email anda">

                
              </div>
            </div>
          </div>
        </footer>
   <footer class="fixed-bottom bg-primary">
    <div class="text-center">
      (c) 2023 Copyright Smp Hafizh Islamic
    </div>
  </footer>
    <!--end footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>