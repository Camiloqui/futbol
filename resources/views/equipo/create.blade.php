@extends('layout')
@section('title')
    Crear equipos
@endsection
@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

<form action="{{url('/equipos ')}}"class="form-horizontal" method="POST">
    @csrf
    <h1> Registre sus 4 equipos</h1>

    <div class="form-group">
    <label for="EquipoA" class="control-label">        {{'Equipo A'}}    </label>
    <input type="Text" class="form-control"name="EquipoA" id="EquipoA" value="">
    </div>
    <div class="form-group">
    <label for="Equipo B" class="control-label">        {{'Equipo B'}}    </label>
    <input type="Text" class="form-control" name="EquipoB" id="EquipoB" value="">
    </div>
    <div class="form-group">
    <label for="Equipo C" class="control-label">        {{'Equipo C'}}    </label>
    <input type="Text" class="form-control" name="EquipoC" id="EquipoC" value="">
    </div>
    <div class="form-group">
    <label for="Equipo D" class="control-label">        {{'Equipo D'}}    </label>
    <input type="Text" class="form-control" name="EquipoD" id="EquipoD" value=""><br><br>
    <input type="submit" value="Agregar" class="btn btn-success">
        <a class="btn btn-primary" href="{{route('equipos.index')}}">Regresar</a>
    </div>


</form>
@endsection
