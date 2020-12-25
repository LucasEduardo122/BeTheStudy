@extends('master')
@section('title_pag', 'Lista de Cargos')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Lista de Cargos</h2>
                    <a class="float-right text-danger" href="{{route('adm.roles')}}">+ Adicionar Cargo</a>
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
                @forelse($roles as $role)
                <tr>
                    <th scope="row">{{$role->id}}</th>
                    <td>{{$role->name}}</td>
                    <td>
                        <a href="{{route('adm.roles.edit', ['id' => $role->id])}}" class="btn btn-info" role="buttom">Editar Cargo</a>
                        <a href="{{route('adm.roles.sync', ['id' => $role->id])}}" class="btn btn-warning" role="buttom">Sincronizar Permissão</a>
                        <a href="#" class="btn btn-danger" role="buttom">Apagar Cargo</a>
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning" role="alert">
                    Não foi encontrado nenhum cargo!
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop