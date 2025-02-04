<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Subject;
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
        Teacher::factory(10)
            ->has(Direction::factory(), 'direction')
            ->has(Subject::factory())
            ->create();
    }
}
