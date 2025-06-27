<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persons; 

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persons::create([
            'full_name' => 'John Doe',
            'email' => 'Test@test.com',
            'phone' => '1234567890',
            'gender' => 'M',
            'is_adult' => true,
            'age' => 30,
        ]);

        Persons::create([
            'full_name' => 'Dohn Joe',
            'email' => 'Joe@test.com',
            'phone' => '1111100000',
            'gender' => 'M',
            'is_adult' => false,
            'age' => 16,
        ]);
    }
}
