@extends('master')
@section('title_pag', 'Adicionando Video')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Adicionando video ao {{$course->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course my-4">
    <div class="container">
        <form action="{{route('listCourse.edit.registervideoGo', ['id' => $course->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome do Vídeo</label>
                    <input type="text" class="form-control" name="name_video" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <select type="text" class="form-control" name="status_comment">
                        <option value="sim">Opção de Comentário</option>
                        <option value="sim">Comentário Ativado</option>
                        <option value="não">Comentário desativado</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbnail" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Thumbnail do vídeo...</label>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-file">
                <label for="video">Link da Aula</label>
                    <input type="text" class="form-control" name="link_aula" id="video" required>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mt-4 mb-4">Adicionar Vídeo</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop