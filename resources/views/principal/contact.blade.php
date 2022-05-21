@extends('layouts.app2')

@section('template_title')
    Maintance
@endsection

@section('content')
    <div class="container" style="margin: 20px auto 3%">
        <h2 style="font-weight: bold; padding: 10px 0">Contactanos</h2>
        <p> En Pcommerce queremos escucharte, escribe tus dudas, quejas o reclamos en el siguiente cuadro formulario y
            nuestro
            servicio de mensajería recibira tus
            mensajes, no olvides que queremos oír lo que nuestros clientes piensan de nosotros.</p>
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
