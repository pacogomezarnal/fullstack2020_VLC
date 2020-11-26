<?php

namespace Database\Factories;

use App\Models\Entregable;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntregableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entregable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> 'Tarea'.rand(0,10),
            'fecha_ini'=> $this->faker->date(),
            'fecha_fin'=> $this->faker->date(),
        ];
    }
}
