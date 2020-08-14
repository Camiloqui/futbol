<h1> Tabla de equipos</h1>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Equipo A</th>
        <th>Equipo B</th>
        <th>Equipo C</th>
        <th>Equipo D</th>
        <th>Partido</th>


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
         <a href="{{ url('/equipos/'.$equipo->id.'/edit') }}"> jugar partido</a>
        </td>
    </tr>


    @endforeach

    </tbody>
</table>

