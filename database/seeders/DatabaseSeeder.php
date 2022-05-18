<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Course::factory()->create([
            'name'  => 'Matematicas',
            'teacher' => 'Porfesor Protón'
        ]);
        Course::factory()->create([
            'name'  => 'Ciencias',
            'teacher' => 'Porfesor Protón'
        ]);
        Course::factory()->create([
            'name'  => 'Geografia',
            'teacher' => 'Porfesor Protón'
        ]);
        Course::factory()->create([
            'name'  => 'Historia',
            'teacher' => 'Porfesor Protón'
        ]);


        User::factory()->create([
            'name'  => 'Juan',
            'surname' => 'Pollito',
            'email' => 'user1@gmail.com'
        ]);
        User::factory()->create([
            'name'  => 'Carlos',
            'surname' => 'De la Fuente',
            'email' => 'user2@gmail.com'
        ]);
        User::factory()->create([
            'name'  => 'Carol',
            'surname' => 'Duchemin',
            'email' => 'user3@gmail.com'
        ]);

       
    }
}
