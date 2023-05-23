<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Menu 1',
                'description' => 'Description of Menu 1',
                'price' => 10.99,
                'warung_id' => 1
            ],
            [
                'name' => 'Menu 2',
                'description' => 'Description of Menu 2',
                'price' => 9.99,
                'warung_id' => 1
            ],
            // Add more menus if needed
        ]);
    }
}
