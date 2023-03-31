<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creating 3 users
        $users = User::factory(3)->create();

        // Creating 10 students for each user.
        $users->each(function ($user) {
            $students = Student::factory(10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
