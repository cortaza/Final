@extends('layouts.structure')
@section('title','edit')
@section('content')
<br>
<h1>EDIT INSTRUCTOR</h1>
<br><br>
<hr>

<form action="{{route('updateinstructor', $Instructor->DNI)}}" method="POST" class="row g-3 needs-validation" novalidate="">
  
  @csrf 
  @method('PUT')
  <!--///////////////////////////////
  //-----//DOCUMENTO//-----//
  /////////////////////////////// -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Documento</font></font></label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->DNI}}" name="nro_doc" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
        <!--///////////////////////////////
      //-----//NOMBRE//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->Nombre}}" name="nombre" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--///////////////////////////////
      //-----//APELLIDO//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->Apellido}}" name="apellido" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--///////////////////////////////
      //-----//TELEFONO//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefono</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->Telefono}}" name="telefono" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--///////////////////////////////
      //-----//CORREO//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->Correo}}" name="correo" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--///////////////////////////////
      //-----//ESTADO//-----//
      /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
        <select class="form-select" id="validationCustom04" required="" name="estado">
          <option selected="" disabled="" placeholder="">Elegir...</font></font></option>        
          <option value="1">Active</option>
          <option value="0">Inactive</option>        
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>

        <!--///////////////////////////////
      //-----//TIPO DE CONTRATO //-----//
      /////////////////////////////// -->
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipo de Contrato</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$Instructor->Tipo_contrato}}" name="contrato" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--SUBMIT BUTTOM-->
        <div class="col-12">
          <button class="btn btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar formulario</font></font></button>
        </div>
</form>    
@endsection