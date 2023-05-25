<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Technology
        Event::insert([
            'event_name' => 'Understanding Mis- and Dis- Information',
            'category_id' => 1,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Thursday, 16 March 2023',
            'event_time' => '13.00 - 14.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'Belajar Coding Mudah dengan Media Scratch',
            'category_id' => 1,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Saturday, 11 February 2023',
            'event_time' => '15.00 - 16.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'How to Build a Career in Cyber Security and IT',
            'category_id' => 1,
            'event_price' => 25000,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Friday, 17 February 2023',
            'event_time' => '13.30 - 15.00 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'Basic Training IoT "Dasar Dasar Arduino Uno"',
            'category_id' => 1,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Sunday, 26 February 2023',
            'event_time' => '13.00 - 15.00 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'Digital Content Strategy - Optimalisasi Penggunaan Media Sosial',
            'category_id' => 1,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Saturday, 4 March 2023',
            'event_time' => '19.00 - 20.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        //Business
        Event::insert([
            'event_name' => 'Semua Bisa Bisnis - Rodashow Jakarta',
            'category_id' => 2,
            'event_price' => 75000,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Thursday, 9 March 2023',
            'event_time' => '14.00 - 16.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'International Business Seminar | Digital Marketing Career: Kupas Tuntas Peluang dan Strategi Menjadi Digital Marketing yang Sukses di Era Digital',
            'category_id' => 2,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Saturday, 11 March 2023',
            'event_time' => '13.00 - 16.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate, Learning Experience',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'Business Finance 101: Anggaran Bisnis Sederhana',
            'category_id' => 2,
            'event_price' => 50000,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Thursday, 16 February 2023',
            'event_time' => '14.00 - 16.30 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'Seminar Membangun Bisnis Online: Raih Peluang Berbisnis dari Rumah',
            'category_id' => 2,
            'event_price' => 0,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Saturday, 11 March 2023',
            'event_time' => '13.00 - 16.00 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

        Event::insert([
            'event_name' => 'RISE Series 2023 "Business Towards 2023: Challenges or Opportunities?"',
            'category_id' => 2,
            'event_price' => 75000,
            'event_place' => 'Zoom Meetings',
            'event_date' => 'Saturday, 4 March 2023',
            'event_time' => '09.00 - 11.40 GMT+7',
            'event_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'event_benefit' => 'SAT Points, E-Certificate',
            'event_participant' => 0,
            'favorite' => false,
            'event_image' => 'https://tse4.mm.bing.net/th?id=OIP.lVi35eMhGjFYvOzvPUQpvwHaHa&pid=Api&P=0&h=180'
        ]);

    }
}
