<div class="form-group row">
    <label>Fecha</label>
        <input type="text" class="form-control"  value="{{\Carbon\Carbon::now()->toFormattedDateString() }}" disabled>
</div>
<div class="form-group row">
        <label>Cliente</label>
        <select class="form-control" name="cliente_id" id="cliente_id"> 
            <option value="0">Seleccione un cliente</option>
        @foreach ($objClientes as $cliente)
        <option value="{{$cliente->id}}"> {{$cliente->nombre}}</option> 
        @endforeach
    </select>
</div>  
<div class="form-group row">
<label>Numero de Factura</label>
    <input type="text" name="numFactura" id="numFactura" class="form-control" value="{{old('numFactura', $data->nombre ?? '')}}" />
</div>  
<div class="container" id="divProducto"> 
<div class="form-group row">
        <div class="col">
            <label>Producto</label>
            <select class="form-control" id="addProducto" name="producto_id"> 
                <option value="0">Seleccione un Producto</option>
            @foreach ($objProductos as $producto)
            <option value="{{$producto->id}}"> {{$producto->nombre}}</option> 
            @endforeach
        </select> </div>
        <div class="col">
            <label for="nombre">Cantidad</label>
            <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{old('cantidad', $data->nombre ?? '0')}}" required/>
        </div> 
        <div class="col">
            <label for="nombre">Valor Unitario</label>
            <input type="text" name="valorUnitario" id="valorUnitario" class="form-control" value="{{old('valorUnitario', $data->nombre ?? '0')}}" required/>
        </div> 
        <div class="col">
            <label for="nombre">Valor Total</label>
            <input type="text" name="valorTotal" id="valorTotal" class="form-control" value="{{old('valorTotal', $data->nombre ?? '0')}}" disabled/>
        </div>          
</div>
</div>
