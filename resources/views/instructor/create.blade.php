@extends('layouts.structure')
@section('title', 'create video game')
@section('content')
<br>
<h1>CREATE INSTRUCTOR</h1>
<br><br>
<hr>

<form  action="{{route('createinstructor')}}" method="POST" class="row g-3 needs-validation" novalidate="">
    
    @csrf
  <!--///////////////////////////////
  //-----//DOCUMENTO//-----//
  /////////////////////////////// -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Documento</label>
    <input type="text" class="form-control" id="validationCustom01" name="nro_doc" placeholder="DNI" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
      <!--///////////////////////////////
    //-----//NOMBRE//-----//
    /////////////////////////////// -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" placeholder="Nombre" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      
      <!--///////////////////////////////
    //-----//APELLIDO//-----//
    /////////////////////////////// -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationCustom01" name="apellido" placeholder="Apellido" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      
    <!--///////////////////////////////
 //-----//TELEFONO//-----//
 /////////////////////////////// -->
   
 <div class="col-md-4">
  <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefono</font></font></label>
  <input type="text" class="form-control" id="validationCustom02" name="telefono" placeholder="Telefono" required="">
  <div class="valid-feedback">
      Looks good!
  </div>
</div>
   <!--///////////////////////////////
    //-----//CORREO//-----//
    /////////////////////////////// -->
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo</font></font></label>
        <input type="text" class="form-control" id="validationCustom02" name="correo" placeholder="Correo" required="">
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
    //-----//TIPO CONTRATO//-----//
    /////////////////////////////// -->
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipo contrato</font></font></label>
        <input type="text" class="form-control" id="validationCustom02" name="contrato" placeholder="Tipo_contrato" required="">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

        <!--///////////////////////////////
    //-----//RED TEMATICA//-----//
    /////////////////////////////// -->
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo de Red</font></font></label>
      <select class="form-select" id="validationCustom04" required="" name="Codigo_red">
        <option selected="" disabled="" placeholder=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elegir...</font></font></option>
        @foreach($Red as $r)
          <option>{{$r->Codigo_red}}</option>    
        @endforeach          
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>      
        <!--///////////////////////////////
    //-----//AREA TEMATICA//-----//
    /////////////////////////////// -->
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo de Area</font></font></label>
      <select class="form-select" id="validationCustom04" required="" name="Codigo_area">
        <option selected="" disabled="" placeholder=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elegir...</font></font></option>
        @foreach ($Area as $a)
          <option>{{$a->Codigo_area}}</option>    
        @endforeach          
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>      
      <!--SUBMIT BUTTOM-->
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar formulario</font></font></button>
      </div>
</form>    
<hr>
@endsection