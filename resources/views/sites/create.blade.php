@extends('adminlte::page')

@section('title', 'Sitios')

@section('content_header')
    <h1>Registro de sitios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-boddy">
            <form action="{{route('site.store')}}" method="POST">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Municipio</label>
                        <input type="text" name="municipio" class="form-control">
                        <small class="text-danger">{{$errors->first('municipio')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Lugar</label>
                        <input type="text" name="lugar" class="form-control">
                        <small class="text-danger">{{$errors->first('lugar')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                        <small class="text-danger">{{$errors->first('nombre')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Direccion</label>
                        <input type="text" name="direccion" class="form-control">
                        <small class="text-danger">{{$errors->first('telefono')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Telefono</label>
                        <input type="text" name="telefono" class="form-control">
                        <small class="text-danger">{{$errors->first('telefono')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Correo</label>
                        <input type="text" name="correo" class="form-control">
                        <small class="text-danger">{{$errors->first('correo')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Foto</label>
                        <input type="text" name="foto" class="form-control">
                        <small class="text-danger">{{$errors->first('foto')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control">
                        <small class="text-danger">{{$errors->first('descripcion')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Tipo de actividad económica</label>
                        <input type="text" name="tipo_actividad" class="form-control">
                        <small class="text-danger">{{$errors->first('tipo_actividad')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Horario de atencion</label>
                        <input type="text" name="horario_atencion" class="form-control">
                        <small class="text-danger">{{$errors->first('horario_atencion')}}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Estado |1 Activo | 2 Desactivado</label>
                        <input type="text" name="estado" class="form-control">
                        <small class="text-danger">{{$errors->first('estado')}}</small>
                    </div>
                </div>
            </form>    
        </div>    
    </div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop