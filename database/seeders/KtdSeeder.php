<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KtdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ktd::factory(6)->create();
    }
}
