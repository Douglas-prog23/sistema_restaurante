@extends('layouts.app')

@section('template_title')
    Platillo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background: rgba(19, 19, 19, 0.712); ">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Platillo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('platillos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Platillo') }}
                                </a>
                              </div>
                              {{-- //boton para generar un reporte --}}
                              <div class="float-right">
                                <a href="{{ route('reporte') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Categoria</th>
										<th>Precio</th>
										<th>Estado</th>
										<th>Stock</th>
										<th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($platillos as $platillo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $platillo->nombre }}</td>
											<td>{{ $platillo->category->nombre}}</td>
											<td>{{ $platillo->precio }}</td>
											<td>
                                                @if ($platillo->estado == 1)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>
											<td>{{ $platillo->stock }}</td>
											<td>
                                                <img src="{{asset($platillo->imagen)}}" alt="{{ $platillo->title }}" class="img-fluid img-thumbnail" width="100px" height="100px">
                                            </td>

                                            <td>
                                                <form action="{{ route('platillos.destroy',$platillo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('platillos.show',$platillo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('platillos.edit',$platillo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $platillos->links() !!}
            </div>
        </div>
    </div>
@endsection
