<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuratM>
 */
class SuratMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_surat' => $this->faker->numberBetween(mt_rand(1,10)),
            'perihal' => $this->faker->sentence(mt_rand(1,6)),
            'alamat' => $this->faker->address(),
            'tanggal' => $this->faker->date($format='y-m-d',$max='now'),
            'dok' => $this->faker->sentence(mt_rand(1,4))
        ];
    }
}
