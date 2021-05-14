<center>
<a href="{{ url('/personas/create') }}"  class="btn btn-success"  >Agregar Persona</a>
</center>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
crossorigin="anonymous">

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>PreNombres</th>
			<th>Apellido. Pr</th>
            <th>Apellido. Sg</th>
            <th>fechanacimiento</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($personas as $personas)
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $persona->prenombres}}</td>
            <td>{{ $persona->prapellido}}</td>
            <td>{{ $persona->sgapellido}}</td>
            <td>{{ $persona->fechanacimiento}}</td>

			<td>
			<a href="{{ url('/personas/'.$persona->id.'/edit') }}">Actualizar</a>

			|

			<form method="post" action="{{url('/personas/'.$persona->id)}}" style="display:inline" >

			  {{ csrf_field() }}
			  {{ method_field('DELETE') }}
			  <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar?');">Eliminar</button>

			</form>


			</td>


		@endforeach
	</tbody>
</table>
{{ $persona->links() }}
