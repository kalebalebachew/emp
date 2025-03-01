<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TeacherSeeder::class,
            StudentSeeder::class,
            GradeSeeder::class,
            SubjectSeeder::class,
        ]);
    }
}
