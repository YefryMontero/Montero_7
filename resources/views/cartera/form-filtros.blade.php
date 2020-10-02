<div class="container">
    <div class="row">
     <div class="col">
         <form action="{{route('ventas')}}" method="GET">
             <div class="form-group">
                    <label>Filtros</label>
                    <input type="text" name="busqueda" placeholder="Ingrese el nombre del cliente, estado" class="form-control">
                </div>
                    <div class="form-group">
                        <input type="submit"  value="Buscar" class="btn btn-success">
                        <input type="submit"  value="Mostrar Todo" class="btn btn-success">
                </div>
            </form>
     </div>
     <div class="col">
         <form action="{{route('ventas')}}" method="GET">
             <div class="form-group">
                <div  class="row">
                 <div  class="col">
                    <label>Fecha inicio</label>
                     <input type="date" name="inicio" class="form-control">
                    </div>
                    <div  class="col">
                    <label>Fecha fin</label>
                     <input type="date" name="fin" class="form-control">
                    </div>
                </div>
             </div>
                    <div class="form-group">
                     <input type="submit"  value="Buscar" class="btn btn-success">
                </div>
            </form>
     </div>   
    </div>
</div>