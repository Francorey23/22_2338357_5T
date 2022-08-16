@extends('adminlte::page')

@section('title', 'Sitios')

@section('content_header')
    <h1>Listado de sitios</h1>
@stop

@section('content')
   <div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Tipo Actividad</th>
                    <th scope="col">Horario atención</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sitios as $sitio)
                    <tr>
                        <td>{{$sitio->id}}</td>
                        <td>{{$sitio->municipio}}</td>
                        <td>{{$sitio->lugar}}</td>
                        <td>{{$sitio->nombre}}</td>
                        <td>{{$sitio->direccion}}</td>
                        <td>{{$sitio->telefono}}</td>
                        <td>{{$sitio->correo}}</td>
                        
                        <td>
                            <div class="imagen">
                                <img class=" img-fluid" src="{{asset('img/'.$sitio->foto)}}" alt="">
                            </div>
                        </td>
                        <td>{{$sitio->descripcion}}</td>
                        <td>{{$sitio->tipo_actividad}}</td>
                        <td>{{$sitio->horario_atencion}}</td>
                        <td>{{$sitio->estado}}</td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
        {{$sitios->links()}}
    </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css">
   <style>
        img {
            width:100px; /* ANCHO_IMAGEN */
            border:solid silver 1px;
            height:100px; /* ALTO_IMAGEN */
            background-position:center center; /* Centrado de imagen*/
            background-repeat:no-repeat;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop