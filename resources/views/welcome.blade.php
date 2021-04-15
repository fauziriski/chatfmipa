<!DOCTYPE html>
<html lang="en">
<head>

     <title>Bimbingan dan Konseling</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('landingpage/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('landingpage/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('landingpage/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('landingpage/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('landingpage/css/templatemo-style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <!-- <a href="#" class="navbar-brand">Known</a> -->
            
                    <img src="{{ asset('landingpage/images/logo.jpg') }}" width="250px" style="margin-top: 5px" class="img-responsive" alt="">
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="/" class="smoothScroll">Beranda</a></li>
                         <li><a href="http://unila.ac.id/" class="smoothScroll">Unila</a></li>
                         <li><a href="https://fmipa.unila.ac.id/kontak/" class="smoothScroll">Kontak</a></li>
                         <li><a href="http://jurnal.fmipa.unila.ac.id/" class="smoothScroll">E-Jurnal</a></li>
                         <li><a href="{{ route('login') }}" class="smoothScroll">Masuk</a></li>
                         
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +62 721 704625</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Pendahuluan</h1>
                                             <h3>Pendidikan formal mempunyai tujuan untuk mengembangkan pengetahuan dan keahlian termasuk keterampilan serta membantu pengembangan kepribadian peserta didik.</h3>
                                             <!-- <a href="#feature" class="section-btn btn btn-default smoothScroll">Mari Konsultasi</a> -->
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>KONSULTASI DAN BIMBINGAN MAHASISWA</h1>
                                             <h3>Konseling merupakan profesi yang sangat erat hubungannya dengan kehidupan manusia secara menyeluruh sehingga menjadi seorang konselor tidak cukup hanya menguasai ilmu dan keterampilan tetapi memerlukan pengembangan pribadi yang matang baik dalam menyelesaikan masalah maupun membina hubungan antara manusia</h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Mulai</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <!-- <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Efficient Learning Methods</h1>
                                             <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div> -->
          </div>
     </section>

     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">
    
               <div class="col-md-12 col-sm-12">
            <div class="section-title">
                <h2 style="text-align: center;">Permasalahan<hr>
                    <small style="line-height:1.5;">Berdasarkan pengalaman, banyak mahasiswa yang sebenarnya mampu berprestasi lebih baik, karena berbagai faktor, prestasi menjadi tidak optimal bahkan dapat gagal.  Faktor-faktor yang dapat mempengaruhi keberhasilan dan kegagalan peserta didik antara lain :</small>
                </h2>
            </div>
        </div>
                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Berkaitan dengan individu peserta didik</h3>
                              <p>Kesehatan fisik dan mental, Kemampuan intelektual, Kepribadian.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Proses pembelajaran</h3>
                              <p>Program/ kurikulum pendidikan, Proses pelaksanaan pembelajaran, Lingkungan, Tempat belajar, Tenaga pengajar, Lingkungan kampus.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Penunjang</h3>
                              <p>Kesesuaian arah dan minat, Sosio-ekonomi-budaya.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" style=" background: #f9f9f9;">
          <div class="container">
               <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2 style="text-align: center;">Bimbingan dan Konseling<hr>
                            <small style="line-height:1.5;">Bimbingan dan konseling adalah dua pengertian yang berhubungan dengan makna pemberian bantuan. Bimbingan dapat diberikan kepada mahasiswa atau kelompok mahasiswa yang mengalami kesulitan dalam pendidikan, memilih jurusan, maupun kesulitan pribadi serta penyesuaian diri dengan masyarakat dan lingkungannya.<br><br>
                            Bimbingan adalah bantuan yang dapat diberikan oleh penasehat akademik kepada mahasiswa agar mereka dapat mengambil keputusan berkaitan dengan kegiatan akademiknya dan menentukan tujuan karirnya.<br><br>
                            Adapun pengertian konseling adalah suatu situasi bantuan penyelesaian masalah yang bersifat terbuka dengan bertemu muka yang diberikan oleh tenaga profesional.<br><br>
                            Dapat disimpulkan bahwa bimbingan dan konseling merupakan istilah yang berbeda maknanya tetapi berhubungan erat, yaitu bantuan kepada mahasiswa atau sekelompok mahasiswa dalam proses perkembangan kearah kedewasaan dan bantuan penyelesaian masalah. Bimbingan lebih bersifat preventif, sedangkan konseling lebih bersifat kuratif.</small>
                        </h2><br><br>
                    </div>
                </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                             <figure>
                                   <figcaption>
                                        <h3>Tujuan Bimbingan dan Konseling</h3><br>
                                        <p>(1) Menyesuaikan diri dengan kehidupan kampus<br>
                                         (2) Menyelesaikan masalah pribadi secara sehat dan konstruktif <br>(3)	Tumbuh dan kembang dengan optimal.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <figcaption>
                                        <h3>Ruang Lingkup</h3><br>
                                        <p>(1) bimbingan pengembangan diri <br>
                                        (2) bimbingan akademik <br>
                                        (3) konseling akademik <br>
                                        (4) bimbingan karir<br>
                                        (5) konseling pribadi.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <figcaption>
                                        <h3>Peran dan Fungsi Bimbingan</h3><br>
                                        <p>(1) Pencegahan, yakni mencegah timbulnya masalah pada diri mahasiswa<br>
                                        (2) Penyaluran, yakni memberi kesempatan kepada mahasiswa yang mempunyai prestasi tinggi untuk mengembangkan diri sesuai dengan bakat, minat dan kecakapannya.<br>
                                        (3) Penyesuaian, yakni membantu terciptanya penyesuaian antara mahasiswa dan lingkungannya.<br>
                                        (4) Perbaikan, yakni berusaha menyelesaikan masalah yang dihadapi mahasiswa<br>
                                        (5) Pengembangan, yakni memberikan pelayanan yang membantu mahasiswa dalam mengembangkan keseluruhan pribadinya secara terarah dan mantap.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                         <form method="POST" action="{{ route('register') }}">
                          @csrf
                                   <h2>Daftar Disini</h2>
                                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">

                                   <button class="submit-btn form-control" id="form-submit">Daftar</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>



     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Tim <small>Tim Konsultasi dan Bimbingan Mahasiwa FMIPA Unila 2021</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="{{ asset('landingpage/images/author-image1.jpg') }}" class="img-responsive" alt="">
                                                       <span>Amir Supriyanto, M.Si.</span>
                                                  </div><br>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Ketua</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="{{ asset('landingpage/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                       <span>Dr. Ilim</span>
                                                  </div><br>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Sekretaris</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="{{ asset('landingpage/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                       <span>Dr. Endah Setyaningrum</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Divisi Kerjasama</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="{{ asset('landingpage/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                       <span>Bambang Hermanto, M.Cs.</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Divisi Pengembangan dan Pelatihan</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="{{ asset('landingpage/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                       <span>Widiarti, M.Si.</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <a href="#"><span>Divisi Pengentasan dan Tindak lanjut Masalah</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>


     

                         </div>

               </div>
          </div>
     </section> 


     
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Hubungi Kami</h2>
                              </div>
                              <address>
                                   <p>Fakultas Matematika dan Ilmu Pengetahuan Alam
                                Universitas Lampung,<br> <br>Jalan Prof. Dr. Sumantri Brojonegoro No. 1
                                Bandar Lampung, Lampung 35144</p>
                              </address>

                              <!-- <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul> -->

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 Tim iCoffee</p>                 
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Kontak Info</h2>
                              </div>
                              <address>
                                   <p>+62 721 704625</p>
                                   <p><a href="#">office@fmipa.unila.ac.id</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Akses Cepat</h2>
                                   <ul>
                                        <li><a href="https://siakadu.unila.ac.id/">Siakad</a></li>
                                        <li><a href="http://sister.unila.ac.id/">Sister</a></li>
                                        <li><a href="http://remunerasidosen.unila.ac.id/">Remun</a></li>
                                        <li><a href="http://bkd.unila.ac.id/">B K D</a></li>
                                        <li><a href="http://lppm.unila.ac.id/">L P P M</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="{{ asset('landingpage/js/jquery.js') }}"></script>
     <script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('landingpage/js/custom.js') }}"></script>

</body>
</html>