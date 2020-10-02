<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Producto;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
         
        if(null ==$request->all()){
            $objProductos = Producto::get();
        }
        else{
             $objProductos = Producto::FiltrarPorNombre($request->busqueda)->get();
        }
        
        
        return view('inventario.index', compact('objProductos'));
    }

    public function actualizarCantidad(Request $request,$id){
           $objProducto = Producto::findOrFail($id);
        $objProducto->update(array_filter($request->all()));
        $mensajes = 'La cantidad de '.$objProducto->nombre.' A sido actualizada con exito';
        return redirect('/inventario/inventario')->with('mensaje', $mensajes);
    }

    public function actualizarPrecio(Request $request,$id){
        $objProducto = Producto::findOrFail($id);
     $objProducto->update(array_filter($request->all()));
     $mensajes = 'El precio  de '.$objProducto->nombre.' a sido actualizado con exito';
     return redirect('/inventario/inventario')->with('mensaje', $mensajes);
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
