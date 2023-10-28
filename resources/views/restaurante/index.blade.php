@extends('layouts.app')

@section('template_title')
    Restaurante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="card" style="background: rgba(19, 19, 19, 0.712);">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Restaurante') }}
                            </span>

                             {{-- <div class="float-right">
                                <a href="{{ route('restaurantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> --}}
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
                                        
										<th>Nombre</th>
										<th>Cod Restaurante</th>
										<th>Slogan</th>
										<th>Telefono</th>
										<th>Direccion</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($restaurantes as $restaurante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $restaurante->nombre }}</td>
											<td>{{ $restaurante->cod_restaurante }}</td>
											<td>{{ $restaurante->slogan }}</td>
											<td>{{ $restaurante->telefono }}</td>
											<td>{{ $restaurante->direccion }}</td>
											<td>{{ $restaurante->email }}</td>

                                            <td>
                                                <form action="{{ route('restaurantes.destroy',$restaurante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('restaurantes.show',$restaurante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('restaurantes.edit',$restaurante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $restaurantes->links() !!}
            </div>
        </div>
    </div>
@endsection
