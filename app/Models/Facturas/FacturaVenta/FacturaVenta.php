<?php

namespace App\Models\Facturas\FacturaVenta;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Cliente;
use App\User;

class FacturaVenta extends Model
{
  protected $table = "facturas_venta";
  protected $fillable = ['numero_factura'];
  protected $guarded = ['id'];
  protected $timestamp = true;

  public function scopeFiltrarPorNombre($query, $texto, $boolean = 'or')
  {
    return $query->where('nombre', 'like', '%' . $texto . '%', $boolean);
  }

  public function clientes()
  {
    return $this->belongsTo(Cliente::class, 'cliente_id');
  }
  public function usuarios()
  {
    return $this->belongsTo(User::class, 'usuario_id');
  }
}
