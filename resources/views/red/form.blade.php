@extends('layouts.structure')
@section('title','Formulario Red')
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
                                        <th>Codigo</th>
                                        <th>Nombre</th>                                        
                                        <th colspan="2"><center>Acción</center></th>                                    
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($redstematica as $redtematica)                                         
                                    <tr>
                                        <th>{{$redtematica->Codigo_red}}</th>
                                        <th>{{$redtematica->Nombre}}</th>                                                                                
                                        <th>
                                            <a href="{{route('edit.prog', $redtematica->Codigo_red )}}" class="btn btn-info">Editar</a> 
                                            <!--DELETE REGISTERS-->
                                            {{-- <form action="{{route('edit.prog', $programa->codigo_prog )}}" method="GET">
                                                @csrf                                                                                                
                                                <button type="submit" class="btn btn-info">Editar</button>
                                            </form>                                             --}}
                                        </th>
                                        <th>
                                            <!--DELETE REGISTERS-->
                                            <form action="{{route('programs.destroy', $redtematica->Codigo_red )}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>                                                
                                            </form>                                            
                                        </th>
                                    </tr>
                                    @empty
                                        <tr>
                                            <th><h3>No hay programas</h3></th>
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