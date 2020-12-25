@extends('master')
@section('title_pag', 'Cursos')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Cursos</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand -->
<div class="brand">
    <div class="container">

    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @forelse($courses as $course)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <img src="{{asset('storage')}}/{{$course->image}}" alt="img" />
                        <h3>R$<strong class="red">{{$course->value}}</strong></h3>
                        <span><a class="text-primary" href="{{route('course.index', ['name' => $course->uri ])}}">{{$course->name}}</a></span>
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
                    <a class="read-more">Exibir Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end brand -->
@stop