@extends('master')
@section('title_pag', 'Login')
@section('pag_content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- login -->
<div class="login">
    <div class="container">
        <form action="{{route('login.go')}}" method="post">
            @csrf
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
            <button type="submit" class="btn btn-info btn-block mb-4">Logar</button>
        </form>
    </div>
</div>
</div>
<!-- end login -->
@stop