@extends('layouts.app2')

@section('template_title')
    Technical Service
@endsection

@section('content')
    <div class="container" style="margin: 20px auto 3%">
        <h2 style="font-weight: bold; padding: 10px 0">Servicio tecnico</h2>
        <p>
            En Pcommerce te ofrecemos un soporte técnico integral, servicios de consultoría informática y
            mantenimiento de
            computadores que se adaptan a tus necesidades, Sobre todo ten tus dispositivos funcionando al 100% con nuestro
            servicio de soporte técnico remoto y
            mantenimiento de computadores.
            Ahora, ¿Tienes problemas con tu computador y no sabes dónde repararlo? No pierdas tiempo y dinero,
            solicita nuestro servicio técnico de reparación de computadores.
        </p>

        </p>
        <h2 style="font-weight: bold; padding: 10px 0">Servicio tecnico a distancia</h2>
        <p>
            El soporte técnico remoto es un servicio en el que nuestro equipo resuelve problemas técnicos al
            conectarse a tu computadora a través de internet.
            Por ejemplo, para brindarte este soporte lo hacemos a través del software de uso compartido de escritorio
            (AnyDesk, TeamViewer).
            Es decir, que permite a nuestro técnico obtener acceso a tu equipo de cómputo y resolver problemas en tiempo
            real, con poca o
            ninguna interrupción de tu trabajo o de uno de tus colaboradores.
        </p>
    </div>

    <section class="content container-fluid" style="margin-bottom: 3%">
        <div class="row">
            <div class="col-md-12" style="display: flex; align-items: center; justify-content: center;">

                @includeif('partials.errors')

                <div class="card card-default" style="width:30%;">
                    <div class="card-header">
                        <span class="card-title">Contactanos</span>
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
