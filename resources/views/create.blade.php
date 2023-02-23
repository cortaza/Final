@extends('layouts.structure')
@section('title', 'create video game')
@section('content')
<br>
<h1>CREATE PROGRAM</h1>
<br><br>
<hr>

<form  action="{{route('createProgram')}}" method="POST" class="row g-3 needs-validation" novalidate="">
    
    @csrf
  <!--///////////////////////////////
  //-----//CODE//-----//
  /////////////////////////////// -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="validationCustom01" name="code" placeholder="Codigo" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
      <!--///////////////////////////////
    //-----//NAME//-----//
    /////////////////////////////// -->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="name"placeholder="Nombre" required="">
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
  <input type="text" class="form-control" id="validationCustom02" name="level" placeholder="Nivel formaciòn" required="">
  <div class="valid-feedback">
      Looks good!
  </div>
</div>
   <!--///////////////////////////////
    //-----//DURATION//-----//
    /////////////////////////////// -->
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Duración</font></font></label>
        <input type="text" class="form-control" id="validationCustom02" name="duration"placeholder="Duraciòn" required="">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
       <!--///////////////////////////////
    //-----//VERSION//-----//
    /////////////////////////////// -->
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Version</font></font></label>
        <input type="text" class="form-control" id="validationCustom05" name="version" placeholder="Version" required="">
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <!--///////////////////////////////
    //-----//CENTER CODE//-----//
    /////////////////////////////// -->
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo centro</font></font></label>
        <select class="form-select" id="validationCustom04" required="" name="centro_codigo">
          <option selected="" disabled="" placeholder=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elegir...</font></font></option>
          @foreach ($centros as $centro)
            <option>{{$centro->Codigo_centro}}</option>    
          @endforeach          
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>      
        <!--///////////////////////////////
    //-----//TEMATIC AREA//-----//
    /////////////////////////////// -->
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo centro</font></font></label>
      <select class="form-select" id="validationCustom04" required="" name="Codigo_area">
        <option selected="" disabled="" placeholder=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elegir...</font></font></option>
        @foreach ($areas as $area)
          <option>{{$area->Codigo_area}}</option>    
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