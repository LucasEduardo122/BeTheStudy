@extends('master')
@section('title_pag', 'Editar Cargo')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Editando Cargo</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
        <form action="{{route('adm.roles.edit.go', ['id' => $role->id])}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="cargo">Nome do cargo</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="cargo" value="{{$role->name}}">
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mb-4">Atualizar Cargo</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop