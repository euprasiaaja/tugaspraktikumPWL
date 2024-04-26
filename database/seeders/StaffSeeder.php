<?php

namespace Database\Seeders;

use App\Model\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
    //      Staff::create([
    //          'nip' => '231402013',
    //          'email' => 'euprasiaaja09@gmail.com',
    //          'nama' => 'Euprasia Enjelika Situmorang',
    //          'tanggal_lahir' => '2006-02-07',
    //          'no_hp' => '082182259594',
    //      ]);

        staff::factory(8)->create();
    }

}