@extends('master')
@section('title_pag', 'Lista de Cursos')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Listagem de Curso</h2>
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
                    <th scope="col">Curso</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                <tr>
                    <th scope="row">{{$course->id}}</th>
                    <td>{{$course->name}}</td>
                    <td>{{$course->value}}</td>
                    <td>
                        <a href="{{route('listCourse.edit', ['name' => $course->uri])}}" class="btn btn-info" role="buttom">Editar Perfil</a>
                        <a href="#" class="btn btn-danger" role="buttom">Apagar Perfil</a>
                    </td>
                </tr>
                @empty
                <div class="alert alert-warning" role="alert">
                    Não foi encontrado nenhum curso!
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop