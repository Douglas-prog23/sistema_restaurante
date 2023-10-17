@extends('layouts.app')

@section('template_title')
    Detalle Platillo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Platillo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-platillos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Id Platillo</th>
										<th>Id Ingrediente</th>
										<th>Mano Obra</th>
										<th>Total</th>
										<th>Precio Venta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallePlatillos as $detallePlatillo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallePlatillo->id_platillo }}</td>
											<td>{{ $detallePlatillo->id_ingrediente }}</td>
											<td>{{ $detallePlatillo->mano_obra }}</td>
											<td>{{ $detallePlatillo->total }}</td>
											<td>{{ $detallePlatillo->precio_venta }}</td>

                                            <td>
                                                <form action="{{ route('detalle-platillos.destroy',$detallePlatillo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-platillos.show',$detallePlatillo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-platillos.edit',$detallePlatillo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallePlatillos->links() !!}
            </div>
        </div>
    </div>
@endsection
