@extends('layouts.app2')

@section('template_title')
    Maintance
@endsection

@section('content')
    <div class="container" style="margin: 20px auto 3%">
        <h2 style="font-weight: bold">Mantenimiento</h2>
        <p>
            El servicio de mantenimiento lo puedes realizar periódicamente en todos tus equipos de cómputo,
            Ciertamente, con el fin de prevenir fallas o reparaciones costosas que puedan afectar el rendimiento,
            funcionamiento y en un futuro un posible cambio. Si tu computador lleva más de seis meses sin recibir
            mantenimiento preventivo o quieres conocer el
            estado de
            tu equipo; Programa el mantenimiento de computadores en Popayan usando el formulario que se escuentra mas abajo
            y asegura la continuidad de tu negocio o
            actividades.
        </p>
        <p>Mejora tu productividad, te ofrecemos mantenimiento para tus dispositivos.
            Nuestro compromiso contigo es ayudarte a tener tus dispositivos funcionando y que sean 100% productivos
            evitandote dolores de cabeza y ayudandote a que todo funcione de una manera correcta.</p>
        </p>
    </div>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12" style="display: flex; align-items: center; justify-content: center;">

                @includeif('partials.errors')

                <div class="card card-default" style="width:30%;">
                    <div class="card-header">
                        <span class="card-title">Message</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action={{ route('mensajes.store') }} role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('principal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
