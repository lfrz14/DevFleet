<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'name' => 'Project 1',
                'description' => 'Description 1',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 2',
                'description' => 'Description 2',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 3',
                'description' => 'Description 3',
                'status' => 'finished',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 4',
                'description' => 'Description 4',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 5',
                'description' => 'Description 5',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 6',
                'description' => 'Description 6',
                'status' => 'finished',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 7',
                'description' => 'Description 7',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 8',
                'description' => 'Description 8',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 9',
                'description' => 'Description 9',
                'status' => 'finished',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project 10',
                'description' => 'Description 10',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Project::insert($data);
    }
}
