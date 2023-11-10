{{-- //resources/views/cart.blade.php --}}
@extends('layouts.public')
   
@section('content')

<div class="container-3" style="padding-inline: 7px;">
    <table id="cart" class="align-middle text-center table  table-bordered table-dark table-hover" style="--bs-table-bg: rgba(0, 0, 0, 0.815) !important; --bs-table-hover-bg: #323539b8;">
        <thead>
            <tr>
                <th style="width:50%" >Producto</th>
                <th style="width:10%">Precio</th>
                <th style="width:8%">Cantidad</th>
                <th style="width:22%">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['precio'] * $details['cantidad'] @endphp
                    <tr rowId="{{ $id }}">
                        <td data-th="Producto">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['imagen'] }}" class="img-fluid img-thumbnail" width="100px" height="100px"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Precio">${{ $details['precio'] }}</td>
                        <td data-th="Cantidad">
                            <input type="number" value="{{ $details['cantidad'] }}" class="form-control cantidad cart_update" min="1" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['precio'] * $details['cantidad'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm delete-product"><i class="fa fa-trash-o"></i> Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-end"><h3><strong>Total ${{ $total }}</strong></h3></td>
            </tr>
            <tr>
                <td colspan="3" class="text-start">
                    <a href="{{ url('/menu') }}" class="btn btn-danger text-start"> <i class="fa fa-arrow-left"></i> Continuar Pedidos</a>
                </td>
                <td colspan="2" style="text-align: center;">
                    <button class="btn btn-success"><i class="fa fa-money text-end"></i>Finalizar</button>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
   
@section('scripts')
<script type="text/javascript">
   
    $(".cart_update").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.shopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
                cantidad: ele.parents("tr").find(".cantidad").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".delete-product").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("¿Realmente quieres eliminarlo?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>
@endsection