<!DOCTYPE html>
<!--
   Template Name: Tabula HTML Template
   Version: 1.0.0
   Author: Webstrot

   -->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
   <![endif]-->
<!--[if IE 9]>
   <html lang="en" class="ie9 no-js">
      <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx" dir="ltr">
<!--[endif]-->

<!-- Mirrored from webstrot.com/html/tabula/job/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2024 03:27:53 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Tabula</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/font-awesome.min.css') }}" />
    <link rel='stylesheet' href='../../../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/responsive.css') }}" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
</head>

<body class="page-bg">
    <div id="preloader">
        <div id="status">
            <img src="images/preloader.svg" id="preloader_image" alt="loader">
        </div>
    </div>

    <div class="login_box_main_wrapper" id="login_height">
        <div class="container">
            <div class="login-logo">
                <a href="index.html"> <img src="{{ URL::to('assets/images/Outright-logo.jpg') }}" alt="logo"> </a>
            </div>
            <div class="signin-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left-side">
                            <h4>Sign In</h4>
                            <form>
                                <div class="form-group field-icon row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="User Name">
                                        <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="form-group field-icon row">
                                    <div class="col-md-12">
                                        <input type="password" placeholder="Password">
                                        <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="round">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox"><span>Remember Me</span></label>
                                </div>

                                <div class="login-btn-sec">
                                    <a class="sub-btn" href="javascript:;"><span>Sign In</span></a>
                                    <div class="social-btn">
                                        <span>- OR -</span>
                                        <ul>
                                            <li>
                                                <a href="https://www.linkedin.com" target="_blank">
                                                    <span><i class="fa fa-linkedin" style="color:black"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:your-email@gmail.com" target="_blank">
                                                    <span><i class="fa fa-envelope"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Do have an account? <a href="{{ route('sign-up') }}">Sign Up now!</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="login-img">
                            <img src="{{ URL::to('assets/images/login-side.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Side Panel -->
    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ URL::to('assets/js/wow.js') }}"></script>
    <script src="{{ URL::to('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/custom.js') }}"></script>

    <!-- custom js-->
    <script>
        const types = ['load', 'resize'];
        types.forEach(function(type) {
            window.addEventListener(type, () => {

                let elem = document.getElementById('login_height');
                let wh = window.innerHeight;

                elem.style.height = wh + 'px';

            });
        });
    </script>
</body>

<!-- Mirrored from webstrot.com/html/tabula/job/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2024 03:27:53 GMT -->

</html>
