@foreach ($platillos->groupBy('categoria') as $categoriaId => $platillosCategoria)
                        @php
                            $categoria = \App\Models\Categoria::find($categoriaId);
                        @endphp
                            <p data-bs-target="#{{ $categoria->nombre }}">{{ $categoria->nombre }}</p>
                                @endforeach