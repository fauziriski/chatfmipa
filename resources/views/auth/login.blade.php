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
                         <li><a href="http://jurnal.fmipa.unila.ac.id/" class="smoothScroll">E-Jurnal</a></li> -->
                         <li><a href="{{ route('register') }}" class="smoothScroll">Belum punya akun ?</a></li>
                        
                         
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +62 721 704625</a></li>
                    </ul>
               </div>

          </div>
     </section>


          <!-- ABOUT -->
          <section id="about" style=" background: white; margin-top:50px;">
          <div class="container">
               <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-7 col-sm-12">
                         <div class="entry-form" style="height:400px;">
                         <form method="POST" action="{{ route('login') }}">
                        @csrf
                                   <h2>Masuk </h2>
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                @enderror
                                   <button class="submit-btn form-control" id="form-submit">Masuk</button>
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