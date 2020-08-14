@extends('layout')
@section('title')
    Partidos
@endsection
@section('content')

<h1>Registre quien gana cada partido</h1>
<form action="{{url('/equipos/'.$equipos->id)}}" method="POST">

    @csrf
    @method('PATCH')
    <label for="PartidoAB">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAB" id="PartidoAB" value="">
    <label for="PartidoBA"> VS {{$equipos->EquipoB}}    </label>
    <input type="int" name="PartidoBA" id="PartidoBA" value=""><br>
    <label for="PartidoCD">        {{$equipos->EquipoC}}    </label>
    <input type="int" name="PartidoCD" id="PartidoCD" value="">
    <label for="PartidoDC">        VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="PartidoDC" id="PartidoDC" value=""><br><br><br><br>

    <label for="PartidoAC">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAC" id="PartidoAC" value="">
    <label for="PartidoCA"> VS {{$equipos->EquipoC}}    </label>
    <input type="int" name="PartidoCA" id="PartidoCA" value=""><br>
    <label for="PartidoBD">        {{$equipos->EquipoB}}    </label>
    <input type="int" name="PartidoBD" id="PartidoBD" value="">
    <label for="PartidoDB">        VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="PartidoDB" id="PartidoDB" value=""><br><br><br><br>

    <label for="PartidoAD">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAD" id="PartidoAD" value="">
    <label for="PartidoDA"> VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="PartidoDA" id="PartidoDA" value=""><br>
    <label for="PartidoCB">        {{$equipos->EquipoC}}    </label>
    <input type="int" name="PartidoCB" id="PartidoCB" value="">
    <label for="PartidoBC">        VS {{$equipos->EquipoB}}    </label>
    <input type="int" name="PartidoBC" id="PartidoBC" value=""><br><br><br><br>

    <input type="submit" value="Enviar Resultados">


</form>
@endsection
