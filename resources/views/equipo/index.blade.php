@extends('layout')
@section('title')
    Tabla de equipos
@endsection
@section('content')
    <h1> Tabla de equipos</h1>
<a href="{{url('/equipos/create')}}" class="btn btn-success">CREAR EQUIPOS</a><br><br>
<table class="table table-light table-hover">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Equipo A</th>
        <th>Equipo B</th>
        <th>Equipo C</th>
        <th>Equipo D</th>
        <th>Partido</th>
        <th>Puntajes</th>


    </tr>
    </thead>
    <tbody>
    @foreach($equipos as $equipo)


    <tr>
        <td>   {{$loop->iteration}}      </td>
        <td>   {{$equipo->EquipoA}}      </td>
        <td>   {{$equipo->EquipoB}}      </td>
        <td>   {{$equipo->EquipoC}}      </td>
        <td>   {{$equipo->EquipoD}}      </td>
        <td>
         <a href="{{ url('/equipos/'.$equipo->id.'/edit') }}" class="btn btn-warning"> jugar partido</a>
        </td>
        <td>
            <a href="{{ url('equipos/'.$equipo->id) }}" class="btn btn-danger">Ver Tabla de clasificacion</a>
        </td>
    </tr>


    @endforeach

    </tbody>
</table>
@endsection
