@extends('master')
@section('title_pag', 'Aula')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Aula {{$video->name_video}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course my-4">
    <div class="container">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$video->link_aula}}" allowfullscreen></iframe>
        </div>

        <div class="comment mt-4">
            <h2 class="text-danger text-center">Comentários</h2>
            @forelse($comments as $comment)
            <ul class="list-unstyled">
                <li class="media my-4">
                    <img src="{{asset('storage/site/helper')}}/unnamed (1).jpg" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">{{$comment->users->first()}}</h5>
                        {{$comment->content}}
                    </div>
                </li>
            </ul>
            @empty
            @if($video->status_comment == "não")
            <div class="container">
                <div class="alert alert-warning text-center" style="border: 1px solid red;" role="alert">
                    Comentário desativado para este vídeo
                </div>
            </div>
            @endif

            @if($video->status_comment == "sim" && empty($comment))
            <div class="container">
                <div class="alert alert-warning text-center" style="border: 1px solid red;" role="alert">
                    Nenhum comentário encontrado
                </div>
            </div>
            @endif
            @endforelse
        </div>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop