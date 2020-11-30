<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tienda;
use App\Models\Producto;

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
    }
}
