<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tienda;
use App\Models\Producto;
use App\Models\Proveedor;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $productos=rand(5,20);
            Tienda::factory(1)->has(Producto::factory()->count($productos))->create();
        }
        Proveedor::factory(10)->create();
        $proveedores=Proveedor::all();
        $tiendas=Tienda::all();

            Proveedor::all()->each(
                function($proveedor) use ($tiendas){
                $proveedor->tiendas()->attach($tiendas->random(1,10)->toArray());
            });
    }
}
