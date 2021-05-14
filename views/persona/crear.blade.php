estoy en el archivo personas crear

<form action="{{url('/personas')}}" method="post">

{{ csrf_field() }}
PreNombres: <input type="text" name="nombre" id="nombre" value="">
<br>
Pr. Apellido: <input type="text" name="prapellido" id="prapellido" value="">
<br>
Sg. Apellido: : <input type="text" name="sgapellido" id="sgapellido" value="">
<br>
<input type="submit" value="Registrar">
