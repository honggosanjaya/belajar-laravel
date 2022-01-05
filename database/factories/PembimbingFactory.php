<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PembimbingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          "kode_pembimbing" => $this->faker->unique()->ean8(),
          "nama" => $this->faker->name(),
        ];
    }
}
