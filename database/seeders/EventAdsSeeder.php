<?php

namespace Database\Seeders;

use App\Models\EventAds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventAds::insert([
            'ads_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        EventAds::insert([
            'ads_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        EventAds::insert([
            'ads_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

    }
}
