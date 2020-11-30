<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return route('tiendas.show', ['tienda' => $this]);
    }

    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function proveedores()
    {
        return $this->belongsToMany('App\Models\Proveedor','tienda_proveedor');
    }
}
