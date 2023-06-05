<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'student_id' => 2440013071,
            'name' => 'Felicia Ferren',
            'faculty' => 'School of Computer Science',
            'email' => 'felicia.ferren@binus.ac.id',
            'password' => 'felicia123',
        ]);
    }
}
