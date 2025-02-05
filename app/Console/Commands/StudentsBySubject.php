<?php

namespace App\Console\Commands;

use App\Models\Subject;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;

class StudentsBySubject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:students-by-subject {subject}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List the students for a specific subject';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subject = $this->argument('subject');

        $studentList = Subject::where('title', $subject)->firstOrFail()->students;

        $formattedStudents = $studentList->map(fn($student) => 'ID: ' . $student->id . ' Name: '.$student->name .' Age: '. $student->age);

        $this->comment($formattedStudents->implode(PHP_EOL));
    }
}
