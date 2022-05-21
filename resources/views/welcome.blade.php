@extends('layouts.app2')

@section('template_title')
    PCommerce
@endsection

@section('content')
    <section class="servicios-container">
        <article>
            <img src="https://image.shutterstock.com/image-photo/flying-parts-modern-computer-hardware-600w-1909056715.jpg"
                height="300" width="400" />
            <h2>VENTA COMPONENTES</h2>
            <p>
                Somos vendedores directos de diferentes productos para tu computadora,
                visite nuestra tienda para conocer los diferentes artículos que tenemos a la venta.
            </p>

            <div class="d-grid gap-2 col-6 mx-auto">
                <a href={{ route('producto.principal') }} class="btn btn-info">Conocer mas</a>
            </div>
        </article>

        <article>
            <img src="https://images.pexels.com/photos/3825582/pexels-photo-3825582.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                height="300" width="400" />
            <h2>SERVICIO TECNICO</h2>
            <p>
                Si necesitas servicio tecnico para reparacion o asesoria de tu equipo no dudes en contactarnos,
                un agente especializado se pondra en contacto para ayudarte.
            </p>

            <div class="d-grid gap-2 col-6 mx-auto">
                <a href={{ route('technical.service') }} class="btn btn-info">Conocer mas</a>
            </div>
        </article>

        <article>
            <img src="https://images.pexels.com/photos/4792719/pexels-photo-4792719.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                height="300" width="400" />
            <h2>MANTENIMIENTO</h2>
            <p>
                Si tu equipo requiere de mantenimiento dejanoslo saber, te podremos agendar y juntos dejaremos tu equipo
                como nuevo.
            </p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href={{ route('maintance') }} class="btn btn-info">Conocer mas</a>
            </div>
        </article>
    </section>
@endsection
