<?php

namespace Database\Factories;

//use App\Models\Mahasiswa;
use App\Models\Ktm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ktm>
 */

class KtmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ktm::class;
    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->numerify('#########'),
            'nomor_identitas' => $this->faker->numerify('KTM#####'),
        ];
}
}
