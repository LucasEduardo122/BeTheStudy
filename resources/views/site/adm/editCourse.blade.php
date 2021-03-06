@extends('master')
@section('title_pag', 'Editando Curso')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Edição de Curso</h2>
                    <a class="float-right text-danger" href="{{route('listCourse.edit.registervideo', ['name'=> $course->uri])}}">+ Adicionar Vídeo</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
        <form action="{{route('registerCourseGo')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome do curso</label>
                    <input type="text" class="form-control" name="name" value="{{$course->name}}" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Professor do Curso</label>
                    <input type="text" class="form-control" name="professor_user_id" value="{{$course->professor_user_id}}" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Imagem do curso...</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Valor</label>
                <input type="text" class="form-control" name="value" value="{{$course->value}}" id="inputAddress2" placeholder="250">
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="validationTextarea">Descrição</label>
                    <textarea class="form-control" name="description" id="validationTextarea" placeholder="Descrição do curso" required>
                    {{$course->description}}
                    </textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mb-4">Editar Curso</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop