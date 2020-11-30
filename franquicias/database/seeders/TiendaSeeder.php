<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tienda;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tienda::factory(10)->create();
    }
}
