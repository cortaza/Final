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
    <label for="validationCustom01" class="form-label">Codigo_area</label> 
    <input type="text" class="form-control" id="validationCustom01" name="Codigo_area" placeholder="Codigo" required="">
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
 //-----//FORMATION LEVEL//-----// 
 /////////////////////////////// -->
   
 <div class="col-md-4"> 
  <label for="validationCustom02" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo_red</font></font></label>
  <input type="text" class="form-control" id="validationCustom02" name="Codigo_red" placeholder="Nivel formaciòn" required="">
  <div class="valid-feedback">
      Looks good!
  </div>
</div>
      <!--SUBMIT BUTTOM-->
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar formulario</font></font></button>
      </div>
</form>    
<hr>
@endsection