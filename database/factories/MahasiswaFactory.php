<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "pembimbing_id" => mt_rand(1, 3),
            "fakultas_id" => mt_rand(1, 3),
            "nim" => $this->faker->unique()->ean13(),
            "nama" => $this->faker->name(),
            "email" =>$this->faker->email(),
        ];
    }
}
