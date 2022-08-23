<x-app-layout>  
    @include('layouts.navigation')
    <div class="container">
        <section class="mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h2>{{$site->nombre}}</h2>
                        <p>{{$site->descripcion}}</p>
                        <img src="{{asset('img/'.$site->foto)}}" alt="">
                    </div>
                    <div class="col-6 mt-4">
                        <form action="" method="POST">
                            @csrf
                            <label for="">Fecha de reserva: </label>
                            <input type="date" name="fecha" placeholder="ingresar fecha de reserva.." class="form-control">
                            <label for="">Hora de reserva: </label>
                            <input type="time" name="hora" placeholder="ingresar hora de reserva.." class="form-control">
                            <label for="">Numero de personas: </label>
                            <input type="text" name="numero-personas" placeholder="numero de personas.." class="form-control">
                            <label for="">Usuario: </label>
                            <input type="text" name="user_id" placeholder="usuario que reserva.." class="form-control">
                            <label for="">Sitio: </label>
                            <input type="number" name="sitio_id" placeholder="sitio que reserva.." class="form-control">
                            <label for="">Servicio: </label>
                            <input type="number" name="servicio_id" placeholder="servicio que reserva.." class="form-control">
                            <div class="col-md-12 text-center mt-4">
                                <button type="submit" class="btn btn-secondary">Registrar reserva</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>  