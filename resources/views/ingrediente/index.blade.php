@extends('layouts.app')

@section('template_title')
    Ingrediente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingrediente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingredientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Stock</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingredientes as $ingrediente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ingrediente->nombre }}</td>
											<td>{{ $ingrediente->descripcion }}</td>
											<td>{{ $ingrediente->precio }}</td>
											<td>{{ $ingrediente->stock }}</td>

                                            <td>
                                                <form action="{{ route('ingredientes.destroy',$ingrediente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingredientes.show',$ingrediente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingredientes.edit',$ingrediente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ingredientes->links() !!}
            </div>
        </div>
    </div>
@endsection
