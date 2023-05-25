<?php

namespace Database\Seeders;

use App\Models\EventCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        EventCategory::insert([
            'category_name' => 'Technology'
        ]);

        EventCategory::insert([
            'category_name' => 'Business'
        ]);
    }
}
