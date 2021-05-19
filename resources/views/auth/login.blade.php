<!DOCTYPE html>
<html lang="en">
<head>

     <title>Daftar</title>
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
          <div class="py-1 bg-primary">
               <div class="container">
                 <div class="row justify-content-center">
                   <div class="col-lg-9">
                     <div class="row">
                       <div class="col-md-9">
                         <span class="text">konsultasi.bimbingan@fmipa.unila.ac.id</span>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
          </div>
          
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="/">
                    <img src="{{ asset('landingpage/images/logoHead.png') }}" width="300px" style="margin-top: 5px" class="img-responsive" alt="">
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <!-- <li><a href="/" class="smoothScroll">Beranda</a></li>
                         <li><a href="http://unila.ac.id/" class="smoothScroll">Unila</a></li>
                         <li><a href="https://fmipa.unila.ac.id/kontak/" class="smoothScroll">Kontak</a></li>
                         <li><a href="http://jurnal.fmipa.unila.ac.id/" class="smoothScroll">E-Jurnal</a></li>
                         <li><a href="{{ route('login') }}" class="smoothScroll">Masuk</a></li> -->
                         
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +62 721 704625</a></li>
                    </ul>
               </div>

          </div>
     </section>


          <!-- ABOUT -->
            <!-- ABOUT -->
            <section id="about" style=" background: white; margin-top:50px;">
          <div class="container">
               <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-7 col-sm-12">
                         <div class="entry-form">
                         <form method="POST" action="{{ route('register') }}">
                          @csrf
                                   <h2>Daftar Disini</h2>
                                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="npm" type="number" required class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" placeholder="NPM" required autocomplete="npm">

                              @error('npm')
                              <span class="invalid-feedback" role="alert">
                                   <strong style="color: white">{{ $message }}</strong>
                              </span>
                              @enderror

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                                <select name="ps" id="ps" class="form-control @error('ps') is-invalid @enderror" name="ps" value="{{ old('ps') }}" placeholder="Program Studi" required autocomplete="ps">
                                   <option selected="true" disabled="disabled">Program Studi...</option>
                                   <option value="S1 Ilmu Komputer">S1 Ilmu Komputer</option>
                                   <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                                   <option value="S1 Fisika">S1 Fisika</option>
                                   <option value="S2 Fisika">S2 Fisika</option>
                                   <option value="S1 Matematika">S1 Matematika</option>
                                   <option value="S2 Matematika">S2 Matematika</option>
                                   <option value="S1 Kimia">S1 Kimia</option>
                                   <option value="S2 Kimia">S2 Kimia</option>
                                   <option value="S1 Biologi">S1 Biologi</option>
                                   <option value="S2 Biologi">S2 Biologi</option>
                                 </select>

                                @error('ps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" 
                                value="{{ old('gender') }}" placeholder="Jenis Kelamin" required autocomplete="gender">
                                   <option selected="true" disabled="disabled">Jenis Kelamin...</option>
                                   <option value="Laki-laki">Laki-laki</option>
                                   <option value="Perempuan">Perempuan</option>
                                 </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="no_telp" type="number" required class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="No Telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">

                              @error('no_telp')
                              <span class="invalid-feedback" role="alert">
                                   <strong style="color: white">{{ $message }}</strong>
                              </span>
                              @enderror

                              <input id="dosen_pa" type="text" required class="form-control @error('dosen_pa') is-invalid @enderror" name="dosen_pa" value="{{ old('dosen_pa') }}" placeholder="Dosen PA" required autocomplete="dosen_pa">

                              @error('dosen_pa')
                              <span class="invalid-feedback" role="alert">
                                   <strong style="color: white">{{ $message }}</strong>
                              </span>
                              @enderror

                              <input id="dosen_ta" type="text" class="form-control @error('dosen_ta') is-invalid @enderror" name="dosen_ta" value="{{ old('dosen_ta') }}" placeholder="Dosen TA/Skripsi/Tesis" autocomplete="dosen_ta">

                                @error('dosen_ta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
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

          <!-- SCRIPTS -->
          <script src="{{ asset('landingpage/js/jquery.js') }}"></script>
     <script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('landingpage/js/custom.js') }}"></script>

</body>
</html>