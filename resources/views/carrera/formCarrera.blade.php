@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Carreras</div>

                <div class="panel-body">
                @if(isset($carrera))
                    {!! Form::model($carrera, ['route' => ['carrera.update', $carrera->id]]) !!}
                @else
                    {!! Form::open(['route' => 'carrera.store']) !!}
                @endif
                        {!! Form::label('carrera', 'Carrera') !!}
                        {!! Form::text('carrera', null) !!}
                        {!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
