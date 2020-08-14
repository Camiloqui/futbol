<h1>Registre quien gana cada partido</h1>
<form action="{{url('/equipos/'.$equipos->id)}}" method="POST">

    @csrf
    @method('PATCH')
    <label for="PartidoAB">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAB" id="PartidoAB" value="">
    <label for="PartidoBA"> VS {{$equipos->EquipoB}}    </label>
    <input type="int" name="PartidoBA" id="PartidoBA" value=""><br>
    <label for="Equipo CD">        {{$equipos->EquipoC}}    </label>
    <input type="int" name="EquipoCD" id="EquipoCd" value="">
    <label for="Equipo DC">        VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="EquipoDC" id="EquipoDC" value=""><br><br><br><br>

    <label for="PartidoAC">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAC" id="PartidoBC" value="">
    <label for="PartidoCA"> VS {{$equipos->EquipoC}}    </label>
    <input type="int" name="PartidoCA" id="PartidoCA" value=""><br>
    <label for="Equipo BD">        {{$equipos->EquipoB}}    </label>
    <input type="int" name="EquipoBD" id="EquipoBD" value="">
    <label for="Equipo DB">        VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="EquipoDB" id="EquipoDB" value=""><br><br><br><br>

    <label for="PartidoAD">{{$equipos->EquipoA}}</label>
    <input type="int" name="PartidoAD" id="PartidoAD" value="">
    <label for="PartidoDA"> VS {{$equipos->EquipoD}}    </label>
    <input type="int" name="PartidoDA" id="PartidoDA" value=""><br>
    <label for="Equipo CB">        {{$equipos->EquipoC}}    </label>
    <input type="int" name="EquipoCB" id="EquipoCB" value="">
    <label for="Equipo BC">        VS {{$equipos->EquipoB}}    </label>
    <input type="int" name="EquipoBC" id="EquipoBC" value=""><br><br><br><br>

    <input type="submit" value="Enviar Resultados">


</form>
