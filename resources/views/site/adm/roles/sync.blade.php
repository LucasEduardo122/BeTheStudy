@extends('master')
@section('title_pag', 'Editar Permissão')
@section('pag_content')
<div class="brand_color mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Sincronizando Permissão e cargo {{$role->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
        <form action="{{route('adm.roles.sync.go', ['id' => $role->id])}}" method="post">
            @csrf
            @method('put')
            @forelse($permissions as $permission)
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="{{$permission->id}}" {{$permission->can == true ? 'checked' : ''}} value="{{$permission->id}}" id="{{$permission->id}}">
                <label class="custom-control-label" for="{{$permission->id}}">{{$permission->name}}</label>
            </div>
            @empty
            <div class="alert alert-warning" role="alert">
                Não foi encontrada nenhuma permissão!
            </div>
            @endforelse
            <button type="submit" class="btn btn-info btn-block mb-4">Sincronizar Permissão e Cargo</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop