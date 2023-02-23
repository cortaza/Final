
@extends('layouts.structure')
@section('title','edit')
@section('content')
<br>
<h1>EDIT PROGRAM</h1>
<br><br>
<hr>
{{-- {{route('updateprogram', $programid)}} --}}
<form action="{{route('updatered', $red->Codigo_red)}}" method="POST" class="row g-3 needs-validation" novalidate="">
  @csrf 
  @method('PUT')
  <!--///////////////////////////////
  //-----//CODE//-----//
  /////////////////////////////// -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Codigo</font></font></label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$red->Codigo_red}}" name="Codigo_red" required="">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
        <!--///////////////////////////////
      //-----//NAME//-----//
      /////////////////////////////// -->
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
          <input type="text" class="form-control" id="validationCustom01" value="{{$red->Nombre}}" name="Nombre" required="">
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