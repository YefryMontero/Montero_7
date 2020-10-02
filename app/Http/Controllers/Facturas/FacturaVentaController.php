<?php

namespace App\Http\Controllers\Facturas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facturas\FacturaVenta\FacturaVenta;
use App\Models\Admin\Cliente;
use App\Models\Admin\Producto;

class FacturaVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(null ==$request->all()){
            
            $objVenta = FacturaVenta::get();
        }
        else{
            dd($request);
        $objVenta = FacturaVenta::get();
        }
        return view('facturas.facturasVenta.index', compact('objVenta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objClientes = Cliente::orderBy('nombre')->get();
        $objProductos = Producto::orderBy('nombre')->get();
        return view('facturas.facturasVenta.crear', compact('objProductos','objClientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        if ($request->ajax()) {
           dd($request);
        } else {
            abort(404);
        }
        return view('facturas.facturasVenta.index');
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
