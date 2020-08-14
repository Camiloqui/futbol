@extends('layout')
@section('title')
    Partidos
@endsection
@section('content')


<h1>Registre quien gana cada partido</h1>
<form action="{{url('/equipos/'.$equipos->id)}}" class="form-horizontal " method="POST">

    @csrf
    @method('PATCH')
    <label for="PartidoAB">{{$equipos->EquipoA}}</label>
    <input type="number" name="PartidoAB" id="PartidoAB" value="">
    <label for="PartidoBA"> VS {{$equipos->EquipoB}}    </label>
    <input type="number" name="PartidoBA" id="PartidoBA" value=""><br>
    <label for="PartidoCD">        {{$equipos->EquipoC}}    </label>
    <input type="number" name="PartidoCD" id="PartidoCD" value="">
    <label for="PartidoDC">        VS {{$equipos->EquipoD}}    </label>
    <input type="number" name="PartidoDC" id="PartidoDC" value=""><br><br><br><br>

    <label for="PartidoAC">{{$equipos->EquipoA}}</label>
    <input type="number" name="PartidoAC" id="PartidoAC" value="">
    <label for="PartidoCA"> VS {{$equipos->EquipoC}}    </label>
    <input type="number" name="PartidoCA" id="PartidoCA" value=""><br>
    <label for="PartidoBD">        {{$equipos->EquipoB}}    </label>
    <input type="number" name="PartidoBD" id="PartidoBD" value="">
    <label for="PartidoDB">        VS {{$equipos->EquipoD}}    </label>
    <input type="number" name="PartidoDB" id="PartidoDB" value=""><br><br><br><br>

    <label for="PartidoAD">{{$equipos->EquipoA}}</label>
    <input type="number" name="PartidoAD" id="PartidoAD" value="">
    <label for="PartidoDA"> VS {{$equipos->EquipoD}}    </label>
    <input type="number" name="PartidoDA" id="PartidoDA" value=""><br>
    <label for="PartidoCB">        {{$equipos->EquipoC}}    </label>
    <input type="number" name="PartidoCB" id="PartidoCB" value="">
    <label for="PartidoBC">        VS {{$equipos->EquipoB}}    </label>
    <input type="number" name="PartidoBC" id="PartidoBC" value=""><br><br><br><br>

    <input type="submit" value="Enviar Resultados" class="btn btn-success">
    <a class="btn btn-primary" href="{{route('equipos.index')}}">Regresar</a>


</form>
@endsection
