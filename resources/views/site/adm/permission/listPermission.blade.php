@extends('master')
@section('title_pag', 'Lista de Permissão')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Lista de Permissão</h2>
                    <a class="float-right text-danger" href="{{route('adm.permission')}}">+ Adicionar Permissão</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
    <table class="table my-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $permission)
                <tr>
                    <th scope="row">{{$permission->id}}</th>
                    <td>{{$permission->name}}</td>
                    <td>
                        <a href="{{route('adm.permission.edit', ['id' => $permission->id])}}" class="btn btn-info" role="buttom">Editar Permissão</a>
                        <a href="#" class="btn btn-danger" role="buttom">Apagar Permissão</a>
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning" role="alert">
                    Não foi encontrada nenhuma permissão!
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop