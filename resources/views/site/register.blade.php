@extends('master')
@section('title_pag', 'Registro')
@section('pag_content')
<div class="brand_color">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Registro</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- register -->
<div class="login">
  <div class="container">
    <form name="formRegister" action="{{route('register.go')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="inputName">Nome</label>
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="inputName" name="name" placeholder="Seu nome">
        <div class="invalid-feedback">
          {{$errors->first('name')}}
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" id="inputEmail4">
          <div class="invalid-feedback">
          {{$errors->first('email')}}
        </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" id="inputPassword4">
          <div class="invalid-feedback">
          {{$errors->first('password')}}
        </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" id="inputAddress" name="address" placeholder="1234 Main St">
        <div class="invalid-feedback">
          {{$errors->first('address')}}
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control {{$errors->has('city') ? 'is-invalid' : ''}}" name="city" id="inputCity">
          <div class="invalid-feedback">
          {{$errors->first('city')}}
        </div>
        </div>
        <div class="form-group col-md-6">
          <label for="estado">UF</label>
          <input type="text" name="uf" maxlength="2" class="form-control {{$errors->has('uf') ? 'is-invalid' : ''}}" id="estado" minlength="1" maxlength="2">
          <div class="invalid-feedback">
          {{$errors->first('uf')}}
        </div>
        </div>
        <button type="submit" class="btn btn-info btn-block mb-4">Cadastrar</button>
    </form>
  </div>
</div>
</div>
<!-- end register -->

@stop