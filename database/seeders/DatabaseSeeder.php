<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
        $student = Student::create([
            'matricula'=>'2130605',
            'name'=>'Raul Damian Rafael',
            'email'=>'raul@gmail.com',
            'password'=>bcrypt('password'),
            'status'=>true
        ]);

        $student->profile()->create([
            'phone'=>'7721192098',
            'address'=>'calle san pedro num 21',
            'birth_date'=>'2025-12-30 '
        ]);
    }
}
