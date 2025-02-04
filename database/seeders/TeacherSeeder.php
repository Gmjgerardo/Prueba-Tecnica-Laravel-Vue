<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::factory(10)->for(
            Teacher::factory(), 'relation'
            )->create();
    }
}
