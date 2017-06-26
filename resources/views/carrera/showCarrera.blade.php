@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Carrera</div>

                <div class="panel-body">
                    
                    <table>
                        <th>ID </th>
                        <th> Carrera</th>
                        <th>Acciones</th>
                        <body>
                            <tr>
                                <td>{{ $carrera->id}}</td>
                                <td>{{ $carrera->carrera}}</td>
                                <td>
                                    <a href="{{ route('carrera.edit', $carrera->id)}}" class="btn btn-warning">Editar</a>
                                    <br/>
                                    {!! Form::open(['route' => ['carrera.destroy', $carrera->id], 'method' => 'delete']) !!} 
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!} 
                                    {!! Form::close() !!} 
                                </td>

                            </tr>   
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection