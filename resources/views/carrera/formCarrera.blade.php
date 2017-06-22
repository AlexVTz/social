@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Carreras</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'carrera.store']) !!}
                        {!! Form::label('carrera', 'Carrera') !!}
                        {!! Form::text('carrera') !!}
                        {!! Form::submit('Aceptar', ['class' => 'btm btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
