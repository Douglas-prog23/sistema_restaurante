<div class="box box-info padding-1">
    <div class="box-body">
        <form action="{{route('pedidos.store')}}">

            <label for="codigo">Codigo:</label><br>
            <input type="text" id="codigo" name="codigo"><br>
        
            <label for="id_cliente">ID Cliente:</label><br>
            <input type="text" id="id_cliente" name="id_cliente"><br>
        
            <label for="total">Total:</label><br>
            <input type="text" id="total" name="total"><br>
        
            <label for="estado">Estado:</label><br>
            <select id="estado" name="estado">
                <option value="pago">Pago</option>
                <option value="pendiente">Pendiente</option>
                <option value="cancelado">Cancelado</option>
            </select><br><br>
        
            <input type="submit" value="Enviar">
        </form>
       
</div>