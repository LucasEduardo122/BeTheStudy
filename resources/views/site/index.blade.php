@extends('master')
@section('title_pag', 'Home')
@section('pag_content')
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{asset('storage/site/helper')}}/online-education-man-holding-his-hands-young-114780756.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                            <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{asset('storage/site/helper')}}/7476.jpg_wh860.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                            <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset('storage/site/helper')}}/banner2.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                            <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>

<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                <div class="about_img">
                    <figure><img src="{{asset('storage/site/helper')}}/about.png" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                <div class="about_box">
                    <h3>Em breve</h3>
                    <span>Aplicação mobile</span>
                    <p>Em breve lançaremos a versão mobile para facilitar os estudos!</p>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Cursos</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @forelse($courses as $course)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <img src="{{asset('storage')}}/{{$course->image}}" alt="img" />
                        <h3>R$<strong class="red">{{$course->value}}</strong></h3>
                        <span>{{$course->name}}</span>
                        <i><img src="{{asset('storage/site/helper')}}/star.png" /></i>
                        <i><img src="{{asset('storage/site/helper')}}/star.png" /></i>
                        <i><img src="{{asset('storage/site/helper')}}/star.png" /></i>
                        <i><img src="{{asset('storage/site/helper')}}/star.png" /></i>
                    </div>
                </div>
                @empty
                <div class="container">
                    <div class="alert alert-warning text-center" style="border: 1px solid red;" role="alert">
                        Nenhum curso encontrado!
                    </div>
                </div>
                @endforelse
                <div class="col-md-12">
                    <a class="read-more">Exibir todos os cursos</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end brand -->
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Ainda em dúvida?</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="{{asset('storage/site/helper')}}/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="{{asset('storage/site/helper')}}/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="{{asset('storage/site/helper')}}/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- end clients -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contato</h2>
                </div>
                <form class="main_form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Seu nome" type="text" name="name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Seu Email" type="text" name="email">
                        </div>
                        <div class=" col-md-12">
                            <input class="form-control" placeholder="Seu Telefone" type="text" name="phone">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" name="message" placeholder="Conteúdo"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <button class="send">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->

@stop