<div class="card">
    <div class="card-header">
        <label>
        Buscar registros
        </label>
        <input wire:model="search" type="text"placeholder="Ingresa el nombre del post" class="form-control">
    </div>
    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @else
        <div class="card-body text-center">
            <span class="text-muted font-italic">No se han encontrado registros</span>
        </div>
    @endif


</div>
