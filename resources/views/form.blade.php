@extends('layouts.structure')
@section('title','forms')
@section('content')
<div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Nivel de formacion</th>                                        
                                        <th>Duracion</th>
                                        <th>Version</th>                                        
                                        <th>Codigo Centro</th> 
                                        <th>Codigo Area</th> 
                                        <th colspan="2"><center>Acción</center></th>                                    
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($programas as $programa)
                                         <!--{{$estado=$programa->estado}}--> 
                                    <tr>
                                        <th>{{$programa->Codigo_prog}}</th>
                                        <th>{{$programa->Nombre}}</th>
                                        <th>
                                            @if ($estado==1)
                                                <p>Activo</p>
                                            @else
                                                <p>Inactivo</p>
                                            @endif
                                        </th>                           
                                        <th>{{$programa->Nivel_formacion}}</th>                           
                                        <th>{{$programa->Duracion}}</th>
                                        <th>{{$programa->Version}}</th>
                                        <th>{{$programa->Codigo_centro}}</th>
                                        <th>{{$programa->Codigo_area}}</th>
                                        <th>
                                            <a href="{{route('edit.prog', $programa->Codigo_prog )}}" class="btn btn-info">Editar</a> 
                                            <!--DELETE REGISTERS-->
                                            {{-- <form action="{{route('edit.prog', $programa->codigo_prog )}}" method="GET">
                                                @csrf                                                                                                
                                                <button type="submit" class="btn btn-info">Editar</button>
                                            </form>                                             --}}
                                        </th>
                                        <th>
                                            <!--DELETE REGISTERS-->
                                            <form action="{{route('programs.destroy', $programa->Codigo_prog )}}" method="POST">
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