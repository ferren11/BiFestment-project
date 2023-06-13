<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        History::insert([
            'event_id' => 1,
            'user_student_id' => '2440013071',
            'event_date' => 'Monday, 12 June 2023',
        ]);
    }
}
