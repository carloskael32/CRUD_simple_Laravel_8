formulario que tendra los datos en comun con create y edit

<h1>{{ $modo }} Empleado</h1>

<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre: '' }}" id="Nombre">


</div>

<div class="form-group">
<label for="Nombre">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">

</div>

<div class="form-group">
<label for="Nombre">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">

</div>

<div class="form-group">
<label for="Nombre">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">

</div>

<div class="form-group">
<label for="Nombre"></label>
 @if(isset($empleado->Foto))
 <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="200" alt="">
 @endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('empleado/') }}"> Regresar</a>
