@extends('master')
@section('title_pag', 'Cadastrar Curso')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Cadastrar Curso</h2>
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
                    <input type="text" class="form-control" name="name" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Professor do Curso</label>
                    <input type="text" class="form-control" name="professor_user_id" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  name="image" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Imagem do curso...</label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Valor</label>
                <input type="text" class="form-control" name="value" id="inputAddress2" placeholder="250">
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="validationTextarea">Descrição</label>
                    <textarea class="form-control" name="description" id="validationTextarea" placeholder="Descrição do curso" required></textarea>
                    
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mb-4">Cadastrar Curso</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop