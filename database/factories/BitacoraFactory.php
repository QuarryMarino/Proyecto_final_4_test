<?php

namespace Database\Factories;

use App\Models\Bitacora;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class BitacoraFactory extends Factory
{

    public function definition(): array
    {
        return [
            'id_usuario'=>Usuarios::inRandomOrder()->first()->id,
            'bitacora'=>fake()->text(),
            'fecha'=>fake()->date(),
            'hora'=>fake()->time(),
            'ip'=>fake()->word(),
            'so'=>fake()->word(),
            'navegador'=>fake()->word(),
            'usuario'=>fake()->firstName()
        ];
    }


}

