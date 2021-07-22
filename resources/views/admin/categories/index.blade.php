@extends('adminlte::page')
@section('title', 'Administrador')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <span>{{ session('info') }}</span>
        </div>

    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.categories.create') }}">Agregar una categoría</a>
        </div>
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.categories.edit', $category) }}">Editar</a></td>
                            <td width="10px">
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
