<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warungs')->insert([
            [
                'name' => 'Warung A',
                'description' => 'This is Warung A',
                'location' => 'Location A',
                'seller_id' => 2
            ],
            [
                'name' => 'Warung B',
                'description' => 'This is Warung B',
                'location' => 'Location B',
                'seller_id' => 2
            ],
            // Add more stores if needed
        ]);
    }
}
