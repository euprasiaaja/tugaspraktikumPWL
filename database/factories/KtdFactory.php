<?php

namespace Database\Factories;

use App\Models\Ktd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ktd>
 */
class KtdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ktd::class;
    public function definition()
    {
        return [
            'id_Dosen' => $this->faker->unique()->numerify('#########'),
            'nomor identitas' => $this->faker->unique()->numerify('##########')
];
}
}
