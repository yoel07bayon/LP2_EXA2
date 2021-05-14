
<form action="{{url('/personas/'.$personas->id)}}" method="post">

{{ csrf_field() }}
{{method_field('PATCH') }}
<div class="form-group">


<label for="PreNombres"  class="control-label" >{{'PreNombres'}}</label>
	<input type="text" placeholder="PreNombres"  name="prenombres" id="prenombres" 	value="{{ isset($persona->prenombres)?$persona->prenombres:old('prenombres') }}">

    {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')  !!}
<br>
    <label for="Pr. Apellido"  class="control-label" >{{'Pr. Apellido'}}</label>
    <input type="text" placeholder="paterno"  name="prapellido" id="prapellido" 	value="{{ isset($persona->prapellido)?$personas->prapellido:old('prapellido') }}">

    {!! $errors->first('prapellido','<div class="invalid-feedback">:message</div>')  !!}
<br>
    <label for="Sg. Apellido"  class="control-label" >{{'Sg. Apellido'}}</label>
    <input type="text" placeholder="escribe tu segundo apellido "  name="sgapellido" id="sgapellido" 	value="{{ isset($persona->sgapellido)?$persona->sgapellido:old('apmaterno') }}">

    {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}

<br class="text-secondary">
<label for="Fecha Nacimiento"  class="control-label" >{{'Fecha Nacimiento '}}</label>
    <input type="text" placeholder="fechanacimiento "  name="fechanacimiento" id="fechanacimiento" 	value="{{ isset($persona->fechanacimiento)?$persona->fechanacimiento:old('fechanacimiento') }}">

    {!! $errors->first('fechanacimiento','<div class="invalid-feedback">:message</div>')  !!}

<br>

    <input type="submit"  class="btn btn-success" value="Actualizar">
    </div>
</form>
