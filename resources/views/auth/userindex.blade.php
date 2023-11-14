@extends('layouts.app')

@section('template_title')
Admin|Usuarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background: rgba(19, 19, 19, 0.712);">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuario.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Usuario') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body" style="-webkit-box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);
                    box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Id User</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo</th>
                                        <th>Username</th>
										<th>Telefono</th>
										<th>Rol</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->id}}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->lastname }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->username }}</td>
											<td>{{ $user->telephone }}</td>
											<td>{{ $user->rol->nombre }}</td>
                                            <td>
                                                <form action="{{ route('usuario.destroy',$user->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('usuario.show',$reservacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuario.edit',$user) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar este Usuario?'); false"><i class="fa fa-fw fa-trash" ></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
