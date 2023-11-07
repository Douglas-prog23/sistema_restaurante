@extends('layouts.app')

@section('template_title')
    Mesa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mesa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mesas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>

                              {{-- boton para generar reporte --}}
                              <div class="float-right">
                                <a href="{{ route('reporte3') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Num Mesa</th>
										<th>Capacidad Max</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mesas as $mesa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mesa->num_mesa }}</td>
											<td>{{ $mesa->capacidad_max }}</td>
											<td>{{ $mesa->estado }}</td>

                                            <td>
                                                <form action="{{ route('mesas.destroy',$mesa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mesas.show',$mesa->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mesas.edit',$mesa->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mesas->links() !!}
            </div>
        </div>
    </div>
@endsection
