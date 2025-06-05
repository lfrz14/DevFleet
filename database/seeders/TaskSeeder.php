<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'project_id' => 1,
                'title' => 'Task 1',
                'description' => 'Description 1',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 2,
                'title' => 'Task 2',
                'description' => 'Description 2',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 3,
                'title' => 'Task 3',
                'description' => 'Description 3',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 4,
                'title' => 'Task 1',
                'description' => 'Description 1',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 5,
                'title' => 'Task 2',
                'description' => 'Description 2',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 6,
                'title' => 'Task 3',
                'description' => 'Description 3',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Task::insert($data);
    }
}
