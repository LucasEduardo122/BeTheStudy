@extends('master')
@section('title_pag', 'Lista de Usuários')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Lista de Usuários</h2>
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
                    <th scope="col">User</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="{{route('adm.roles.syncUser', ['id' => $user->id])}}" class="btn btn-warning" role="buttom">Sincronizar cargo</a>
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning" role="alert">
                    Não foi encontrado nenhum usuário!
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop