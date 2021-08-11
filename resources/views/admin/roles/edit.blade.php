@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-check"></i>{{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route'=>['admin.roles.update',$role],'method' => 'put']) !!}
            @include('admin.roles.partials.form')
            {!! Form::submit('Editar rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
