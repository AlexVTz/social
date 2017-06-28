@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuarios</div>

                <div class="panel-body">
                    <table>
                        <th>ID </th>
                        <th> Nombre</th>
                        <th> Correo </th>
                        <th> Carrera</th>
                        <th> Rol </th>
                        
                        <body>
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->nombre}}</td>
                                <td>{{ $user->email}}</td>
                                
                                <td>{{ $user->carrera->carrera}}</td>
                                <td>{{ $user->rol}}</td>
                            </tr>
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>

   <div class="row">
        <div clas = "col-md-8 col-md-offset-2">
            <h3>Asociar con Programa</h3>
            {!! Form::open(['action' => 'AdminUsuarioController@asociarPrograma']) !!}
            {!! Form::label('id', 'Seleccione el Programa',  ['class' => '']) !!}
            {!! Form::select('id', $programas, null, ['class' => 'form-control']) !!}
            {!! Form::hidden('user_id', $user_id)!!}
            {!! Form::submit('Aceptar', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>

</div>
@endsection
