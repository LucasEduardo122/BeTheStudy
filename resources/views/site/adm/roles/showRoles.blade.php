@extends('master')
@section('title_pag', 'Adicionar Cargos')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Adicionar Cargos</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- courseadd -->
<div class="course">
    <div class="container">
        <form action="{{route('adm.roles.go')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="cargo">Nome do cargo</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="cargo" value="{{old('name')}}">
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mb-4">Adicionar Cargo</button>
        </form>
    </div>
</div>
</div>
<!-- end courseadd -->
@stop