@extends('layouts.app')

@section('template_title')
    Reservaciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background: rgba(19, 19, 19, 0.712);">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Reservacion') }}
                                </a>
                              </div>
                              {{-- boton para generar reporte  --}}
                              <div class="float-right">
                                <a href="{{ route('reporte2') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Generar Reporte') }}
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
                                        
										<th>Id Cliente</th>
										<th>Mesa #</th>
										<th>Fecha</th>
										<th>Num Personas</th>
                                        <th>Ocasión</th>
										<th>Hora</th>
										{{-- <th>Comentario</th> --}}
										<th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservaciones as $reservacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reservacione->usuario->name }}</td>
											<td>{{ $reservacione->mesa->num_mesa }}</td>
											<td>{{ $reservacione->fecha }}</td>
											<td>{{ $reservacione->num_personas }}</td>
											<td>{{ $reservacione->ocasion }}</td>
											<td>{{ $reservacione->hora }}</td>
											{{-- <td>{{ $reservacione->comentario }}</td> --}}
											<td>{{ $reservacione->estado }}</td>
                                            <td>
                                                <form action="{{ route('reservaciones.destroy',$reservacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservaciones.show',$reservacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservaciones.edit',$reservacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
