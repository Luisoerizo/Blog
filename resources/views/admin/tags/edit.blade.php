@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')
    <h1>Editar detalles de la etiqueta</h1>
@stop


@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

            @include('admin.tags.partials.form')

            {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
