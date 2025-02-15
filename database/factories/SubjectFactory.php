<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    private $subjects = [
        'Mathematics',
        'Sciences',
        'History',
        'Physics',
        'Biology',
        'Chemistry',
        'Spanish',
        'English',
        'Art',
        'Sports',
    ];

    private $levels = [
        'Elementary',
        'Intermediate',
        'Advanced',
    ];

    private function generateSubjectTitle() {
        $nombre = $this->subjects[array_rand($this->subjects)];
        $nivel = $this->levels[array_rand($this->levels)];

        return $nombre.": ".$nivel;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->generateSubjectTitle(),
        ];
    }
}
