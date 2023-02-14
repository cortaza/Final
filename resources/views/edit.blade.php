
@extends('layouts.structure')
@section('title','edit')
@section('content')
<br>
<h1>EDIT PROGRAM</h1>
<br><br>
<hr>

{{-- {{route('updateprogram', $programid)}} --}}
<form action="{{route('updateprogram', $program->Codigo_prog)}}" method="POST" class="row g-3 needs-validation" novalidate="">
  
  @csrf 
  @method('PUT')
  <!--///////////////////////////////
  //-----//CODE//-----//
  /////////////////////////////// -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo</font></font></label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$program->Codigo_prog}}" name="code" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
        <!--///////////////////////////////
      //-----//NAME//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$program->Nombre}}" name="name" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <!--///////////////////////////////
      //-----//STATUS//-----//
      /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
        <select class="form-select" id="validationCustom04" required="" name="status">
          <option selected="" disabled="" placeholder="">Elegir...</font></font></option>        
          <option value="1">Active</option>
          <option value="0">Inactive</option>        
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
     
      <!--///////////////////////////////
   //-----//FORMATION LEVEL//-----//
   /////////////////////////////// -->
     
   <div class="col-md-4">
    <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nivel de formaciòn</font></font></label>
    <input type="text" class="form-control" id="validationCustom02" value="{{$program->Nivel_formacion}}" name="level" required="">
    <div class="valid-feedback">
        Looks good!
    </div>
</div>
     <!--///////////////////////////////
      //-----//DURATION//-----//
      /////////////////////////////// -->
      <div class="col-md-4">
          <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Duración</font></font></label>
          <input type="text" class="form-control" id="validationCustom02" value="{{$program->Duracion}}" name="duration" required="">
          <div class="valid-feedback">
              Looks good!
          </div>
      </div>
         <!--///////////////////////////////
      //-----//VERSION//-----//
      /////////////////////////////// -->
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Version</font></font></label>
          <input type="text" class="form-control" id="validationCustom05" value="{{$program->Version}}"name="version"  required="">
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <!--///////////////////////////////
      //-----//CENTER CODE//-----//
      /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo Centro</font></font></label>
        <input type="text" class="form-control" id="validationCustom05" value="{{$program->Codigo_centro}}" name="centro_codigo" required="">
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <!--///////////////////////////////
      //-----//TEMATIC AREA//-----//
      /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo Area</font></font></label>
        <input type="text" class="form-control" id="validationCustom05" value="{{$program->Codigo_centro}}" name="Codigo_area" required="">
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
        <!--SUBMIT BUTTOM-->
        <div class="col-12">
          <button class="btn btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar formulario</font></font></button>
        </div>
</form>    
@endsection