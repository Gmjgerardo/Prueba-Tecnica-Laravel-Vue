<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::factory(45)->for(
            Student::factory(), 'relation'
            )->create();
    }
}
