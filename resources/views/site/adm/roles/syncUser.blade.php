@extends('master')
@section('title_pag', 'Sincronizar Cargo')
@section('pag_content')
<div class="brand_color mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Sincronizando cargo para {{$user->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
        <form action="{{route('adm.roles.syncUser.go', ['id' => $user->id])}}" method="post">
            @csrf
            @method('put')
            @forelse($roles as $role)
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="{{$role->id}}" {{$role->can == true ? 'checked' : ''}} value="{{$role->id}}" id="{{$role->id}}">
                <label class="custom-control-label" for="{{$role->id}}">{{$role->name}}</label>
            </div>
            @empty
            <div class="alert alert-warning" role="alert">
                Não foi encontrado nenhum usuário!
            </div>
            @endforelse
            <button type="submit" class="btn btn-info btn-block mb-4">Sincronizar Cargo e Usuário</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop