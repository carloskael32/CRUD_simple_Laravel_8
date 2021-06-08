//formulario de creacion de empleado

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="Nombre">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br>
<label for="Nombre">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
<br>
<label for="Nombre">Correo</label>
<input type="text" name="Correo" id="Correo">
<br>
<label for="Nombre">Foto</label>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="guardar datos">

</form>