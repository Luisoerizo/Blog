@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}">Nueva etiqueta</a>

    <h1>Mostrar listado de Etiquetas</h1>
@stop

@section('content')



    <div class="card">
        <div class="card-body">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    <span>{{ session('info') }}</span>
                </div>
            @endif
            <table class="table table-striped ">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.tags.edit', $tag) }}">Editar</a></td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
