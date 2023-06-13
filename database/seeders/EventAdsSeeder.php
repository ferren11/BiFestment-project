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
            'ads_image' => 'https://cdn-binusacid.azureedge.net/event/uploads/_client__2/648000dc06053_230620%20NYKC%20Tips%20for%20Creating%20Impactful%20Book%20Banner.png.png'
        ]);

        EventAds::insert([
            'ads_image' => 'https://cdn-binusacid.azureedge.net/event/uploads/_client__2/6481573965895_230610%20Bold%20Series%20International%20Experience%20-%20International%20Business%20-%20Countertrade%20banner.jpg.jpeg'
        ]);

        EventAds::insert([
            'ads_image' => 'https://cdn-binusacid.azureedge.net/event/uploads/_client__2/647eb56ad0abe_230607%20Bold%20Series%20Industrial%20Sharing%20-%20Production%20&%20Operation%20banner.png.png'
        ]);

    }
}
