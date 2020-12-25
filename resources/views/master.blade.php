<!DOCTYPE html>
<html lang="pt_br">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title_pag')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf_token" content="{{csrf_token()}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/')}}/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/')}}/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/css/')}}/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('storage/site/helper')}}/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/')}}/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/')}}/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="main-layout ">
    @if(session('notify-error'))
    <div class="alert alert-danger" role="alert">
        {{session()->get('notify-error')}}
    </div>
    @endif

    @if(session('notify-success'))
    <div class="alert alert-success" role="alert">
        {{session()->get('notify-success')}}
    </div>
    @endif
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('storage/site/helper')}}/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('storage/site/helper')}}/Screenshot_1-removebg-preview.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="{{route('home')}}">Home</a> </li>
                                        <li> <a href="{{route('course')}}">Cursos</a> </li>

                                        @if(!Auth::check())
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Registro</a></li>
                                        @endif
                                        @if(Auth::check())
                                        <li><a href="{{route('profile')}}">Perfil</a></li>
                                        <li><a href="{{route('register')}}">Editar Conta</a></li>
                                        @endif

                                        <li><a href="{{route('contact')}}">Contato</a></li>

                                        @if(Auth::check())
                                        <li><a href="{{route('logout')}}">Sair</a></li>
                                        @endif
                                        <li class="last">
                                            <a href="#"><img src="{{asset('storage/site/helper')}}/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="{{asset('storage/site/helper')}}/call.png" />(+00)000000000</li>
                                <li><img src="{{asset('storage/site/helper')}}/email.png" />dominio@gmail.com</li>
                                <li><img src="{{asset('storage/site/helper')}}/loc.png" />Localização</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    @yield('pag_content')


    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Endereço</h3>
                                <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                                <p>(+00)000000000
                                    <br>dominio@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="{{route('home')}}">Home</a></li>
                                    <li> <a href="{{route('course')}}">Cursos</a></li>

                                    @if(!Auth::check())
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Registro</a></li>
                                    @endif
                                    @if(Auth::check())
                                        <li><a href="{{route('profile')}}">Perfil</a></li>
                                        <li><a href="{{route('register')}}">Editar Conta</a></li>
                                    @endif

                                        <li><a href="{{route('contact')}}">Contato</a></li>

                                    @if(Auth::check())
                                        <li><a href="{{route('logout')}}">Sair</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2020 Todos os direitos reservados. Be The <span style="color: red;">Study<span></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('assets/js/')}}/jquery.min.js"></script>
    <script src="{{asset('assets/js/')}}/popper.min.js"></script>
    <script src="{{asset('assets/js/')}}/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/')}}/jquery-3.0.0.min.js"></script>
    <script src="{{asset('assets/js/')}}/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{asset('assets/js/')}}/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('assets/js/')}}/custom.js"></script>
    <!-- javascript -->
    <script src="{{asset('assets/js/')}}/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>

    @yield('js')
</body>

</html>