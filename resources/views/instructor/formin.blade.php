@extends('layouts.structure')
@section('title','forms')
@section('content')
    <div class="col-md-8">
    <br>    
        <div>        
            @include('partials.selectform')       
        </div>
    <br>
        <table class="table" >
            <thead class="table-success table-striped" >
                <tr>
                    <th>Numero de Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>                                        
                    <th>Correo</th>
                    <th>Estado</th>                                        
                    <th>Tipo de Contrato</th> 
                    <th>Codigo Red</th> 
                    <th>Codigo Area</th> 
                    <th colspan="2"><center>Acción</center></th>                                    
                    </tr>
                </thead>
                <tbody>
                    @forelse($Instructor as $Instructor)
                    <!--{{$estado=$Instructor->estado}}--> 
                <tr>
                    <th>{{$Instructor->DNI}}</th>
                    <th>{{$Instructor->Nombre}}</th>
                    <th>{{$Instructor->Apellido}}</th>
                    <th>{{$Instructor->Telefono}}</th>
                    <th>{{$Instructor->Correo}}</th>
                    <th>
                        @if ($estado==1)
                            <p>Activo</p>
                        @else
                            <p>Inactivo</p>
                        @endif
                    </th>
                    <th>{{$Instructor->Tipo_contrato}}</th>
                    <th>{{$Instructor->Codigo_red}}</th>
                    <th>{{$Instructor->Codigo_area  }}</th>
                    <th>
                        <a href="{{route('instructor.edit', $Instructor->DNI )}}" class="btn btn-info">Editar</a> 
                        <!--DELETE REGISTERS-->
                        {{-- <form action="{{route('instructor.edit', $Instructor->DNI )}}" method="GET">
                            @csrf                                                                                                
                            <button type="submit" class="btn btn-info">Editar</button>
                        </form>                                             --}}
                    </th>
                    <th>
                        <!--DELETE REGISTERS-->
                        <form action="{{route('instructor.destroy', $Instructor->DNI )}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>                                                
                        </form>                                            
                    </th>
                </tr>
                @empty
                <tr>
                    <th><h3>No hay instructores</h3></th>
                </tr>
                @endforelse
                </tbody>                            
            <br>
        </table>
    </div>      
    <br>
    <br>
    <div>
        <a href="{{route('create')}}" class="btn btn-info" style="background-color:green; border-color:green;">Crear</a> 
    </div>
@endsection