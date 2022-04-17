<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SumbarrancakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\SumbarrancakModel::factory(10)->create();
    }
}
