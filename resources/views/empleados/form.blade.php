Formulario de datos del empleado



<label for ="nombre"> {{'nombre'}}</label>
<input type="text" name="nombre" id="nombre"
value="{{isset($empleado->nombre)?$empleado->nombre:''}}">
</br>

<label for ="ApellidoPaterno"> {{'ApellidoPaterno'}}</label>
<input required type="text" name="ApellidoPaterno" id="ApellidoPaterno"
 value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
</br>

<label for ="ApellidoMaterno"> {{'ApellidoMaterno'}}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno"
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
</br>

<label for ="Correo"> {{'Correo'}}</label>
<input required type="email" name="Correo" id="Correo"
value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
</br>

<label for ="Foto"> {{'Foto'}}</label>
@if(isset($empleado->Foto))
<br/>
<img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
@endif

<input required type="file" name="Foto" id="Foto" value="">
</br>

<input type="submit" value ="{{$Modo=='crear'?'Agregar':'Modificar'}}">

<a href="{{url('empleados')}}">Regresar</a>
