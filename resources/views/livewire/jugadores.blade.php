<div>
    <h1>Jugadores</h1>

    <table>
        <thead>
            <th>
                Nombre

            </th>
            <th>
                Apellido
            </th>
            <th>
                cedula
            </th>

            <th>
                Numero_Camiseta
            </th>
            <th>
                Posicion
            </th>
            <th>
                Equipo
            </th>
            <thead>
                <tbody>    
                @foreach ($jugadores as $item)
                    <tr>
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->apellido}}
                    </td>
                    <td>
                        {{$item->cedula}}
                    </td>        
                    <td>
                        {{$item->numero_camisa}}
                    </td>      
                    <td>
                        {{$item->posicion}}
                    </td>
                </tr>

                    
                      
                @endforeach
                <p><a href="reportes">reporte</a></p>
</div>
