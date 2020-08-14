<form action="{{url('/equipos ')}}" method="POST">
    @csrf
    <h1> Registre sus 4 equipos</h1>
    <label for="EquipoA">        {{'Equipo A'}}    </label>
    <input type="Text" name="EquipoA" id="EquipoA" value=""><br>
    <label for="Equipo B">        {{'Equipo B'}}    </label>
    <input type="Text" name="EquipoB" id="EquipoB" value=""><br>
    <label for="Equipo C">        {{'Equipo C'}}    </label>
    <input type="Text" name="EquipoC" id="EquipoC" value=""><br>
    <label for="Equipo D">        {{'Equipo D'}}    </label>
    <input type="Text" name="EquipoD" id="EquipoD" value=""><br><br>
    <input type="submit" value="Agregar">



</form>
