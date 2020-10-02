<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facturas\FacturaVenta\FacturaVenta;

class CarteraController extends Controller
{
    //
    function index(){
        $objFacturasVenta = FacturaVenta::with('clientes:id,nombre','usuarios:id,name')->get();
         return view ('cartera.index', compact('objFacturasVenta'));
    }
}
