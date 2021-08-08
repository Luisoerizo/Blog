<div class="card">
   <div class="card-header">
      <label>Nombre o correo de usuario</label>
      <input wire:model="search" type="text" class="form-control" placeholder="Escriba el nombre o correo de un usuario.">
   </div>
   @if ($users->count())
   <div class="card-body">
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
                  <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td width="10px"><a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>
                      </td>

                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <div class="card-footer">
    {{$users->links()}}
  </div>
   @else
       <div class="card-body text-center">
            <span class="lead font-italic">No se han encontrado registros</span>
       </div>
   @endif

</div>
