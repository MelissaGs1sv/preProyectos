no info

<table class="table table-dark">
<thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Nombre Completo</th>
        <th>Correo</th>
        <th>Empresa</th>
        <th>Telefono</th>
    </tr>
</thead>
<tbody>
    @foreach($formulario as $formularios);
    <tr>
        <td>{{$formularios->id}}</td>
        <td>{{$formularios->nombre}}</td>
        <td>{{$formularios->correo}}</td>
        <td>{{$formularios->empresa}}</td>
        <td>{{$formularios->telefono}}</td>
        <td>borra | editar </td>
    </tr>
    @endforeach
</tbody>

</table>