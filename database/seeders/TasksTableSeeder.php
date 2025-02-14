<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Complete the report',
            'description' => 'Write the final report for the project.',
            'status' => false, // Not finished
            'finished' => null
        ]);

        Task::create([
            'title' => 'Clean up the workspace',
            'description' => 'Organize the office and clear the desk.',
            'status' => true, // Finished
            'finished' => now()
        ]);

        Task::create([
            'title' => 'Update website',
            'description' => 'Fix bugs and add new features to the website.',
            'status' => false, // Not finished
            'finished' => null
        ]);
    }
}
