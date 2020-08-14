@extends('layout')
@section('title')
    Puntajes
@endsection
@section('content')


<h1>Puntajes y posiciones</h1>
<table class="table table-light table-hover">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Equipo</th>
        <th>Puntos totales</th>
        <th>Goles tolates</th>


    </tr>
    </thead>
    <tbody>
    @foreach($puntos as $punto)
        <tr>
            <td> {{$loop->iteration}}</td>

            @if($punto->Equipos==1)
                <td>{{$equipos->EquipoA}}</td>
            @elseif($punto->Equipos==2)
                <td>{{$equipos->EquipoB}}</td>
            @elseif($punto->Equipos==3)
                <td>{{$equipos->EquipoC}}</td>
            @elseif($punto->Equipos==4)
                <td>{{$equipos->EquipoD}}</td>
            @endif

            <td>{{$punto->Puntos}}</td>
            <td>{{$punto->Goles}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('equipos.index')}}">Regresar</a>
@endsection
