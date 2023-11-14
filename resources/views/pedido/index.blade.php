@extends('layouts.app')

@section('template_title')
    Pedidos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background: rgba(19, 19, 19, 0.712);">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Pedido') }}
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
										<th>Codigo</th>
										<th>Cliente</th>
                                        <th>Total</th>
										<th>Estado</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($pedidos->isEmpty())
                                        <tr>
                                            <td colspan="8" style="font-size: 18px;">No hay Pedidos Registrados</td>
                                        </tr>
                                    @else
                                        @foreach ($pedidos as $pedido)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $pedido->codigo }}</td>
                                                <td>{{ $pedido->id_cliente}}</td>
                                                <td>{{ $pedido->total}}</td>
                                                <td>{{ $pedido->estado }}</td>
                                                <td>
                                                    <form action="{{ route('pedidos.estado', $pedido->id) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="d-flex">
                                                            <select name="estado" class="form-control mr-2">
                                                                <option value="Pendiente" {{ $pedido->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                                                <option value="Confirmado" {{ $pedido->estado == 'Confirmado' ? 'selected' : '' }}>Confirmado</option>
                                                                <option value="Enviado" {{ $pedido->estado == 'Enviado' ? 'selected' : '' }}>Enviado</option>
                                                                <option value="Entregado" {{ $pedido->estado == 'Entregado' ? 'selected' : '' }}>Entregado</option>
                                                            </select>
                                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-save"></i> Guardar</button>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary" href="{{ route('pedidos.show', $pedido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver Detalle') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button> --}}
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>                                
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
