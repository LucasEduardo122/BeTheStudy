@extends('master')
@section('title_pag', 'Curso')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Bem vindo ao {{$courses->name}} !</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course my-4">
    <div class="container">
        <h2 class="text-center text-danger">Aulas</h2>
        @forelse($video as $aula)
        <div class="list-group ml-4">
            <div class="row">
                <div>
                    <img class="img-thumbnail d-flex" style="width: 50px; height:50px" src="{{asset('storage')}}/{{$aula->thumbnail}}" alt="">
                </div>

                <div class="col-10">
                    <a role="button" style="color: blue;" href="{{route('course.aula', ['name' => $courses->uri,'uri' => $aula->uri])}}" class="list-group-item list-group-item-action">{{$aula->name_video}}</a>
                </div>
            </div>
        </div>
        @empty
        <div class="container">
            <div class="alert alert-warning text-center" style="border: 1px solid red;" role="alert">
                Nenhuma aula encontrada!
            </div>
        </div>
        @endforelse
    </div>
</div>
</div>
<!-- end courseadd -->
@stop