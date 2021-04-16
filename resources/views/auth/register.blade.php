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
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="npm" type="number" required class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" placeholder="NPM" required autocomplete="npm">

                              @error('npm')
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

                                <input id="no_telp" type="number" required class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="No Telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">

                              @error('no_telp')
                              <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                              <input id="dosen_pa" type="text" required class="form-control @error('dosen_pa') is-invalid @enderror" name="dosen_pa" value="{{ old('dosen_pa') }}" placeholder="Dosen PA" required autocomplete="dosen_pa">

                              @error('dosen_pa')
                              <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                              <input id="dosen_ta" type="text" class="form-control @error('dosen_ta') is-invalid @enderror" name="dosen_ta" value="{{ old('dosen_ta') }}" placeholder="Dosen TA/Skripsi/Tesis" required autocomplete="dosen_ta">

                                @error('dosen_ta')
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

          <!-- SCRIPTS -->
          <script src="{{ asset('landingpage/js/jquery.js') }}"></script>
     <script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('landingpage/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('landingpage/js/custom.js') }}"></script>

</body>
</html>