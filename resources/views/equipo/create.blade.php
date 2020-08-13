<form action="{{url('/equipos ')}}" method="POST">
    @csrf
    <h1> Registre sus 4 equipos</h1>
    <label for="Equipo A">        {{'Equipo A'}}    </label>
    <input type="Text" name="Equipo A" id="Equipo A" value=""><br>
    <label for="Equipo B">        {{'Equipo B'}}    </label>
    <input type="Text" name="Equipo B" id="Equipo B" value=""><br>
    <label for="Equipo C">        {{'Equipo C'}}    </label>
    <input type="Text" name="Equipo C" id="Equipo C" value=""><br>
    <label for="Equipo D">        {{'Equipo D'}}    </label>
    <input type="Text" name="Equipo D" id="Equipo D" value=""><br><br>
    <input type="submit" value="Agregar">



</form>
