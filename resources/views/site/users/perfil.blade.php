@extends('master')
@section('title_pag', 'Perfil')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Perfil</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- profile -->
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="information mt-4 mb-4">
                    <label for="name">Nome</label>
                    <p class="text-danger" id="name">{{$user->name}}</p>
                    <hr>
                    <label for="email">Email</label>
                    <p class="text-danger" id="email">{{$user->email}}</p>
                    <hr>
                    <label for="address">Endereço</label>
                    <p class="text-danger" id="address">{{$user->address}}</p>
                    <hr>
                    <label for="city">Cidade</label>
                    <p class="text-danger" id="city">{{$user->city}}</p>
                    <hr>
                    <label for="uf">UF</label>
                    <p class="text-danger" id="uf">{{$user->uf}}</p>
                </div>
            </div>

            <div class="col-6">
                @if(empty($user->photo))
                <img src="{{asset('storage/site/helper')}}/profile.png" style="width: 80%;" alt="..." class="img-thumbnail">
                @endif

                @if(!empty($user->photo))
                <img src="{{asset('storage/site/user')}}/Auth::id()/{{$user->photo}}" style="width: 80%;" alt="..." class="img-thumbnail">
                @endif

                @can('administrator')
                <div class="my-4 mr-3">
                    <button type="button" class="btn btn-info">Adicionar Cursos</button>
                    <button type="button" class="btn btn-warning">Listar Cursos</button>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
</div>
<!-- end profile -->
@stop