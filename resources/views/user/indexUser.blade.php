@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>

                <div class="panel-body">
                    @if(count($users)>0)
                    <table>
                        <th>ID </th>
                        <th> Nombre</th>
                        <th> Correo </th>
                        <th> Carrera</th>
                        <th> Rol </th>
                        
                        <body>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->nombre}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->codigo}}</td>
                                
                                <td>{{ $user->carrera->carrera}}</td>
                                <td>{{ $user->rol}}</td>
                                
                                
                            </tr>
                            @endforeach
                        </body>
                    </table>
                    @else
                        <span>No hay usuarios registrados</span>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
