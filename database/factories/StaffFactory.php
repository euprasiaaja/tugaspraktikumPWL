<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Staff::class;

    public function definition(): array
    {
        // Staff::factory(8)->create();
        return [
            'nip' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique->safeEmail(),
            'nama' => $this->faker->name(),
            'tanggal_lahir' => $this->faker->date(),
            'no_hp' => $this->faker->phoneNumber()
];
}
}