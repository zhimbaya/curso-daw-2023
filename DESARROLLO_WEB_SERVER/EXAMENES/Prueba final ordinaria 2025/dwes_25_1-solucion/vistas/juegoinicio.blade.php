{{-- Usamos la vista app como plantilla --}}
@extends('app')

{{-- Sección aporta el título de la página --}}
@section('title', 'Partidas inacabadas')

{{-- Sección muestra vista de juego para que el usuario elija una letra --}}
@section('navbar')
<li class="nav-item me-5">
    <a class="nav-link" aria-current="page" href="juego.php?botonnuevapartida">Nueva Partida</a>
</li>
@endsection

@section('usermenu')
@parent
@endsection

@section('content')
<div class="container">
    <h2 class="my-2 text-center">Partidas Inacabadas</h2>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Palabra Descubierta</th>
                        <th scope="col">Letras</th>
                        <th scope="col">NumErrores</th>
                        <th scope="col">Fecha Inicio</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($partidasInacabadas as $partida)
                    <tr>
                        <td><a href="juego.php?botonjuegapartida&partidaid={{$partida->getId()}}"> {{ $partida->getPalabraDescubierta() }}</a></td>
                        <td>{{ $partida->getLetras() }}</td>
                        <td>{{ $partida->getNumErrores() }}</td>
                        <td>{{ ($partida->getInicio())->format('d M Y') }}</td>

                    </tr>
                    @empty
                    <tr><td>No hay partidas inacabadas</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


