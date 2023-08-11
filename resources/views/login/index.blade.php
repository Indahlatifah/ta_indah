@extends('layouts.main2')

<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	{{-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> --}}
    <!-- end of preloader -->
    



    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Log In Disini!</h1>
                    <br/>

                        <!--Pesan Error-->
                          @if(session()->has('loginError'))
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             {{ session('loginError') }}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  
                             </button>
                            </div>
                            @endif
                 <!--  <p>You don't have a password? Then please <a class="white" href="sign-up.html">Sign Up</a></p> 
                     Sign Up Form -->
                    <div class="form-container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control-input @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
                                <label class="label-control" for="email">Email</label>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control-input" id="password" required>
                                <label class="label-control" for="password">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">LOG IN</button>
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>


{{-- 
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form method="POST" action="{{ route('login') }}">
            @csrf
         <form action="#">
            <div class="field">
               <input type="text" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html> --}}