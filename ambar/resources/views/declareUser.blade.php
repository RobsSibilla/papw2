@extends('layouts.instructor-app')

@section('title', 'Alta')

@section('header-content')
    <div class="row margin_bottom">
    	<div class="col-md-1">
    		<img class="avatar-pic" src="{{ asset('imgs/profile-picture-placeholder.png') }}">
    	</div>
    	<div class="col-md-2 name">
    		Alumno
    	</div>
    	<div class="col-md-8 col-md-offset-1">
    		<h2><a href="#">Inscribe</a> un curso para comenzar a acumular logros</h2>
    	</div>
    </div>
@endsection

@section('content')
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
    <div class="col-md-3">
        <h2>Cargar Usuario</h2>
        <form action="store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="tipo" name="user-type">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre(s)" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellido(s)" name="last-name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="signup-email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="signup-password">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="imageFile" id="imageFile">
            </div>
            <div class="form-group">
                <select class="form-control" id="empresas">
                    <option value="0">Selecciona</option>                    
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </form>
        <div class="row margin_bottom">
            <div class="col-md-12">
                <a data-toggle="tab" href="#" class="btn btn-success btn-block" id="register"><h4>Registrarse</h4></a>
            </div>
        </div>
    </div>    
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/declareUser.js') }}"></script>
@endsection